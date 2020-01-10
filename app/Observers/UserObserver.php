<?php

namespace App\Observers;

use Illuminate\Support\Facades\Log;

/**
 * Devemos criar um Observer quando temos muitos eventos para um determinado Model
 */
class UserObserver
{
    public function creating($user)
    {
        Log::info("User {$user->email}, event CREATING.");
    }
    
    public function created($user)
    {
        // Mail::to($user)->send(new UserRegistered($user));
        Log::info("User {$user->email}, event CREATED.");
    }

    public function updating($user)
    {
        Log::info("User {$user->email}, event UPDATING.");
    }

    public function updated($user)
    {
        Log::info("User {$user->email}, event UPDATED.");
    }

    public function saving($user)
    {
        Log::info("User {$user->email}, event SAVING.");
    }

    public function saved($user)
    {
        Log::info("User {$user->email}, event SAVED.");
    }
}
