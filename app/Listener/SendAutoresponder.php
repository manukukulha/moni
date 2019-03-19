<?php

namespace App\Listener;

use Mail;
use App\Mail\MessageReceived;
use App\Events\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAutoresponder
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

        Mail::to($message->email, $message->name)->send(new MessageReceived($message));
    }
}
