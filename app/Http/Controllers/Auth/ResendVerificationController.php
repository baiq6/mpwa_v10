<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmailLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ResendVerificationController extends Controller
{
    public function resend(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->route('login')->with('alert', [
                'type' => 'danger',
                'msg' => __('Email tidak ditemukan.')
            ]);
        }
        if ($user->email_verified_at) {
            return redirect()->route('login')->with('alert', [
                'type' => 'success',
                'msg' => __('Email sudah diverifikasi.')
            ]);
        }
        // Generate token dan simpan ke password_resets
        $token = Str::random(64);
        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => bcrypt($token),
                'created_at' => Carbon::now()
            ]
        );
        $url = url('/email/verify/' . $token . '?email=' . urlencode($user->email));
        Mail::to($user->email)->send(new VerifyEmailLink($url));
        return redirect()->route('login')->with('alert', [
            'type' => 'success',
            'msg' => __('Link verifikasi email telah dikirim ulang. Silakan cek email Anda.')
        ]);
    }

    public function verify(Request $request, $token)
    {
        $email = $request->query('email');
        $row = DB::table('password_resets')->where('email', $email)->first();
        if (!$row || !\Hash::check($token, $row->token)) {
            return redirect()->route('login')->with('alert', [
                'type' => 'danger',
                'msg' => __('Token verifikasi tidak valid atau sudah digunakan.')
            ]);
        }
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->route('login')->with('alert', [
                'type' => 'danger',
                'msg' => __('User tidak ditemukan.')
            ]);
        }
        $user->email_verified_at = now();
        $user->save();
        DB::table('password_resets')->where('email', $email)->delete();
        return redirect()->route('login')->with('alert', [
            'type' => 'success',
            'msg' => __('Email Anda berhasil diverifikasi. Silakan login.')
        ]);
    }
}
