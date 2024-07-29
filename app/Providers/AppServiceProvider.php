<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Follower;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Share user data with all views if user is authenticated
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $requests = Follower::where('following_id', Auth::user()->id)->where('accepted',null)->get();

                foreach($requests as $users) {
                    $users->user = User::where('id',$users->user_id)->first(['id','first_name','last_name','email','username','profile_picture']);
                }
                
                $view->with('username', Auth::user()->username);
                $view->with('first_name', Auth::user()->first_name);
                $view->with('last_name', Auth::user()->last_name);
                $view->with('profile_picture', Auth::user()->profile_picture);
                $view->with('requests', $requests);
            }
        });

        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->view('auth.verify_custom_email', [
                    'user' => $notifiable,
                    'url' => $url
                ]);
                // ->subject('Verify Email Address')
                // ->line('Click the button below to verify your email address.')
                // ->action('Verify Email Address', $url);
        });
    }
}
