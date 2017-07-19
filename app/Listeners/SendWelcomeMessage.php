<?php

namespace App\Listeners;

use App\Notifications\WelcomeMessage;
use Illuminate\Auth\Events\Registered;

class SendWelcomeMessage
{
    public function handle(Registered $event)
    {
        $event->user->notify(new WelcomeMessage($event->user));
    }
}