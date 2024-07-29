<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $date = now();
        $user = User::where('email', $googleUser->email)->first();
        
        if(!$user) {
            //generate username and check if username exist in database 'echo $faker->username;'
            $faker = Faker::create();
            $new_username = $faker->username;
            $username_exists = User::where('username', $new_username)->exists();
            if($username_exists) {
                $new_username .= rand(0,2000);
            }

            if(isset($googleUser->user['family_name'])) {
                $family_name = $googleUser->user['family_name'];
            }   
            else {
                $family_name = null;
            }
            $user = User::create(['first_name' => $googleUser->user['given_name'], 
                                  'last_name' => $family_name,
                                  'profile_picture' => 'storage/images/profiles/default_profile.jpg',
                                  'email' => $googleUser->email, 
                                  'username' => $new_username,
                                  'email_verified_at' => $date,
                                  'password' => \Hash::make(rand(100000,999999))]);
        }

        auth()->login($user);
        $check = 0;
        
        DB::statement('SET GLOBAL FOREIGN_KEY_CHECKS = ?;',[$check]);
        return redirect('/');

    }
}