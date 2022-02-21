<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email Không Được Bỏ Trống',
                'password.required' => 'Mật Khẩu Không Được Bỏ Trống',
                'email.email' => 'Email Không Đúng Định Dạng',
            ]
        );

        if (Auth::attempt($credentials) && Auth::user()->QUYEN == 1  && Auth::user()->deleted_at == null) {
            $request->session()->regenerate();

            return redirect()->intended('/taikhoan');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
