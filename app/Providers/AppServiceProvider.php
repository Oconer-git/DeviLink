<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\View;
use Illuminate\Support\Facades\Auth;

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
                $view->with('username', Auth::user()->username);
                $view->with('first_name', Auth::user()->first_name);
                $view->with('last_name', Auth::user()->last_name);
                $view->with('profile_picture', Auth::user()->profile_picture);
            }
        });
    }
}
