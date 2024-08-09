<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    public function lockScreen()
    {
        return view('auth.lock-screen');
    }
}
