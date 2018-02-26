<?php

namespace Adi\Listeners;

use Adi\Events\NewUserRegistrationEvent;
use Adi\Mail\Welcome;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserRegistrationEventListener implements ShouldQueue
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
     * @param  NewUserRegistrationEvent $event
     * @return void
     */
    public function handle(NewUserRegistrationEvent $event)
    {
        \Mail::to($event->user)->send(new Welcome($event->user));
    }
}
