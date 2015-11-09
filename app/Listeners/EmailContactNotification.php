<?php

namespace App\Listeners;

use App\Events\ContactMessageSent;
use Illuminate\Mail\Mailer;
use Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailContactNotification
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
     * @param  ContactMessageSent  $event
     * @return void
     */
    public function handle(ContactMessageSent $event)
    {
        $contact_message = $event->contact_message;
        Mail::send('email.contact_message_confirmation', ['contact_message' => $contact_message], function($m) use ($contact_message) {
            $m->from('info@up-webservices.com');
            $m->to($contact_message->mail, $contact_message->name)->subject("You're message has been successfully sent!");
        });
    }
}
