<?php

namespace App\Providers;

use App\Mail\UserRegistered;
use App\User;
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
        User::created(function ($user) {
            Mail::to($user)->send(new UserRegistered($user));
        });
    }
}
