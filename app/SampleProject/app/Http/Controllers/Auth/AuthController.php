<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

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
        dd($request->all());
    }
}
