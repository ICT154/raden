<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

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
        return view('auth.password-forgot');
    }

    public function lockScreen()
    {
        return view('auth.lock-screen');
    }


    /**
     * Authenticates a user.
     *
     * @param \Illuminate\Http\Request $request The request object.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response The redirect response or response object.
     */
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

    /**
     * Store a new user.
     *
     * @param \Illuminate\Http\Request $request The request object.
     *
     * @return \Illuminate\Http\RedirectResponse The redirect response
     * @throws \Throwable
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'register.first_name' => 'required',
                'register.last_name' => 'required',
                'register.email' => 'required|email|unique:users,email',
                'register.password' => 'required|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request->input('register.first_name') . ' ' . $request->input('register.last_name'),
                'email' => $request->input('register.email'),
                'password' => Hash::make($request->input('register.password')),
            ]);

            $user->sendEmailVerificationNotification();

            return redirect()->route('verification.notice');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->withErrors([
                'register.email' => 'Failed to register user. Please try again. ' . $th->getMessage(),
            ]);
        }
    }

    /**
     * Verify the user's email address.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function verificationVerify(Request $request)
    {
        if (!URL::hasValidSignature($request)) {
            abort(403, 'Invalid or expired link.');
        }

        $user = User::findOrFail($request->id);

        if ($user->hasVerifiedEmail()) {
            return redirect()->route('dashboard.index');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->route('dashboard.index');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'forgot.email' => 'required|email',
        ]);

        $email = $request->input('forgot.email');

        $status = Password::sendResetLink(['email' => $email]);

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        $email = request()->query('email');
        return view('auth.password-reset', ['token' => $token, 'email' => $email]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'reset.email' => 'required|email',
            'reset.password' => 'required|min:8|confirmed',
            'reset.token' => 'required',
        ]);

        $email = $request->input('reset.email');
        $password = $request->input('reset.password');
        $token = $request->input('reset.token');

        $status = Password::reset(
            [
                'email' => $email,
                'password' => $password,
                'password_confirmation' => $request->input('reset.password_confirmation'),
                'token' => $token,
            ],
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}
