<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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


    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'login.email' => 'required|email',
            'login.password' => 'required'
        ]);

        $remember = $request->has('login.remember');
        $email = $request->input('login.email');
        $password = $request->input('login.password');

        if (auth()->attempt([
            'email' => $email,
            'password' => $password
        ], $remember)) {

            // jika email sudah terverifikasi
            if (auth()->user()->email_verified_at != null) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } else {
                auth()->logout();
                return back()->withErrors([
                    'login.email' => 'Your email is not verified yet. Please check your email for verification link.',
                ]);

                return redirect()->route('verification.notice');
            }
        }
        return back()->withErrors([
            'login.email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function verificationNotice()
    {
        return view('auth.verify-email');
    }
}
