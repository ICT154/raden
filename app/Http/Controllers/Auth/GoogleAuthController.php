<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $userFromGoogle = Socialite::driver('google')->user();


        $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();

        if (!$userFromDatabase) {
            $newUser = User::create([
                'name' => $userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
                'google_id' => $userFromGoogle->getId(),
            ]);

            auth()->login($newUser);
            session()->regenerate();

            return redirect()->to('/dashboard');
        } else {
            auth()->login($userFromDatabase);
            session()->regenerate();

            return redirect()->to('/dashboard');
        }
    }
}
