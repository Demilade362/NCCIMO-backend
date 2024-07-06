<?php

namespace App\Listeners;

use App\Events\WelcomeEmail;
use App\Mail\Welcome;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WelcomeEmail $event): void
    {
        Mail::to($event->user->email)->send(new Welcome($event->user));
    }
}
