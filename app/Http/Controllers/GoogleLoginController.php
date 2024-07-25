<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        dd($googleUser);
        $user = User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            $user = User::create(['first_name' => $googleUser->user->given_name, 
                                  'last_name' => $googleUser->user->family_name,
                                  'profile_picture' => 'storage/images/profiles/default_profile.jpg',
                                  'email_verified_at' => now(),
                                  'email' => $googleUser->email, 
                                  'password' => \Hash::make(rand(100000,999999))]);
        }

        Auth::login($user);
        $check = 0;
        
        DB::statement('SET GLOBAL FOREIGN_KEY_CHECKS = ?;',[$check]);
        return redirect('/');

    }
}