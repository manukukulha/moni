<?php

namespace App\Listener;

use Mail;
use App\Mail\NotificationToOwner;
use App\Events\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotificationToTheOwner
{
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        $message = $event->message;

        Mail::to('monica@correo.com', 'Monica Marquez')->send(new NotificationToOwner($message));
    }
}
