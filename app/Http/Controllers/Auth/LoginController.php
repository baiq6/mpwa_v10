<?php
/*
Copyright © Magd Almuntaser, OneXGen Technology. All rights reserved.
Project: MPWA Whatsapp Gateway | Multi Device
Licensed under the CC BY-NC-ND 4.0 License.
For details, visit https://creativecommons.org/licenses/by-nc-nd/4.0/.
*/

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function index()
    {
        return view('theme::auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // 1. Cek apakah user ada berdasarkan username
        $user = User::where('username', $request->username)->first();

        // 2. Jika user tidak ditemukan, tampilkan error hanya untuk username
        if (!$user) {
            throw ValidationException::withMessages([
                'username' => __('auth.username_not_registered'),
            ]);
        }


        // 3. Cek apakah email sudah diverifikasi
        if (is_null($user->email_verified_at)) {
            return back()->withInput()->with('alert', [
                'type' => 'danger',
                'msg' => __('Silakan verifikasi email Anda terlebih dahulu.')
            ]);
        }
        $remember = $request->filled('remember');
        if (Auth::attempt($request->only(['username', 'password']), $remember)) {
            $request->session()->regenerate();
            return redirect('/home');
        }

        // 4. Jika sampai sini dan login gagal, berarti password-nya yang salah
        throw ValidationException::withMessages([
            'password' => __('auth.password_incorrect'),
        ]);
    }
}
