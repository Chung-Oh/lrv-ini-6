<?php

namespace App\Providers;

use App\Mail\UserRegistered;
use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Evento = Ação e Disparo
        User::creating(function ($user) {
            Log::info("User {$user->email}, event CREATING.");
        });
        User::creating(function ($user) {
            Log::info("User {$user->email}, event CREATING - 2.");
        });
        User::created(function ($user) {
            // Mail::to($user)->send(new UserRegistered($user));
            Log::info("User {$user->email}, event CREATED.");
        });
        User::updating(function ($user) {
            Log::info("User {$user->email}, event UPDATING.");
        });
        User::updated(function ($user) {
            Log::info("User {$user->email}, event UPDATED.");
        });
        User::saving(function ($user) {
            Log::info("User {$user->email}, event SAVING.");
        });
        User::saved(function ($user) {
            Log::info("User {$user->email}, event SAVED.");
        });
    }
}
