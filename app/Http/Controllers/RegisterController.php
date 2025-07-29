<?php
/*
Copyright © Magd Almuntaser, OneXGen Technology. All rights reserved.
Project: MPWA Whatsapp Gateway | Multi Device
Licensed under the CC BY-NC-ND 4.0 License.
For details, visit https://creativecommons.org/licenses/by-nc-nd/4.0/.
*/

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('theme::auth.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'username' => 'unique:users|min:4|required',
            'email' => 'unique:users|email|required',
            'password'  => 'required|min:6'
        ]);


        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_key' =>  Str::random(30),
            'chunk_blast' => 0,
        ]);

        // Kirim email verifikasi
        event(new Registered($user));

        return redirect(route('login'))->with('alert', [
            'type' => 'success',
            'msg' => __('Registrasi berhasil! Silakan cek email untuk verifikasi sebelum login.')
        ]);
    }
}
