<?php

namespace App\Listeners;

use App\Events\LoginTime;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginTimeMessage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LoginTime  $event
     * @return void
     */
    public function handle(LoginTime $event)
    {
        \Log::info("Login{$event->logintime->name}");
    }
}
