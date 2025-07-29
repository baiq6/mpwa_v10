<?php
/*
Copyright © Magd Almuntaser, OneXGen Technology. All rights reserved.
Project: MPWA Whatsapp Gateway | Multi Device
Licensed under the CC BY-NC-ND 4.0 License.
For details, visit https://creativecommons.org/licenses/by-nc-nd/4.0/.
*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PasswordResetController extends Controller
{
	public function showLinkRequestForm()
	{
		return view('theme::auth.passwords.email');
	}

	public function sendResetLinkEmail(Request $request)
	{
		// Validasi input, error otomatis dilempar ke view oleh Laravel
		$request->validate(['email' => 'required|email']);
		$user = User::where('email', $request->email)->first();

		// Jika email tidak ditemukan, tampilkan alert manual
		if (!$user) {
			return back()->with('alert', [
				'type' => 'danger',
				'msg' => __('Email does not exist.')
			])->withInput();
		}

		$token = Password::createToken($user);
		$url = URL::to('/password/reset', $token) . '?email=' . urlencode($request->email);

		try {
			Mail::to($request->email)->send(new ResetPasswordMail($url));
		} catch (\Throwable $th) {
			return redirect('login')->with('alert', [
				'type' => 'danger',
				'msg' => __('There is an issue with your SMTP settings')
			]);
		}

		return redirect('login')->with('alert', [
			'type' => 'success',
			'msg' => __('We have emailed your password reset link!')
		]);
	}

	public function showResetForm(Request $request, $token = null)
	{
		$email = $request->email;

		$tokenData = DB::table('password_resets')->where('email', $email)->first();

		if (!$tokenData || !Hash::check($token, $tokenData->token)) {
			// Tampilkan view error khusus, tidak redirect
			return response()->view('theme::auth.passwords.reset-error', [
				'msg' => __('Invalid token or email')
			]);
		}

		// Pastikan alert dari session tetap dikirim ke view jika ada
		$alert = session('alert');
		return view('theme::auth.passwords.reset', [
			'token' => $token,
			'email' => $email,
			'alert' => $alert
		]);
	}


	public function reset(Request $request)
	{
		// Validasi input, error otomatis dilempar ke view oleh Laravel
		$request->validate([
			'token' => 'required',
			'email' => 'required|email',
			'password' => 'required|string|confirmed',
		]);

		$status = Password::reset(
			$request->only('email', 'password', 'password_confirmation', 'token'),
			function ($user, $password) {
				$user->forceFill([
					'password' => Hash::make($password)
				])->setRememberToken(Str::random(60));

				$user->save();
				event(new PasswordReset($user));
				Auth::login($user);
			}
		);

		if ($status === Password::PASSWORD_RESET) {
			// Hapus token reset password manual dari database
			DB::table('password_resets')->where('email', $request->email)->delete();
			// Tampilkan alert sukses di halaman reset, jangan redirect, dan kirim flag sukses
			return back()->with([
				'alert' => [
					'type' => 'success',
					'msg' => __('Your password has been reset successfully.')
				],
				'reset_success' => true
			]);
		} else {
			// Jika gagal reset (bukan error validasi input), tampilkan alert gagal di halaman reset
			return back()->with('alert', [
				'type' => 'danger',
				'msg' => __($status)
			])->withInput();
		}
	}
}
