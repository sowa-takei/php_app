<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return view
     */
    public function showLogin()
    {
        return view('login.login_form');
    }
    /**
     * @param App\http\Requests\LoginFormRequest
     * // phpcs:ignoreFile
     * $request
     */
    public function Login(LoginFormRequest $request)
    {
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('login_success', 'ログイン成功しました！');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }

        /**
         * ユーザーをアプリケーションからログアウトさせる
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route('showLogin')->with('logout', 'ログアウトしました');
        }
}
