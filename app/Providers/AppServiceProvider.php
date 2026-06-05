<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Using the view composer to share session data with all views
        View::composer('*', function ($view) {
            // Retrieve session data
            $user_id = session('user_id');
            $first_name = session('first_name');
            $last_name = session('last_name');
            $email = session('email');
            $user_type = session('user_type');
            $provider_id = session('provider_id');

            // Pass the session data to all views
            $view->with([
                'user_id' => $user_id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'user_type' => $user_type,
                'provider_id' => $provider_id,
            ]);
        });
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
