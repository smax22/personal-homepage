<?php

namespace App\Http\Repositories;

use App\Http\Contracts\ContactMessageRepositoryInterface;
use App\Http\Models\ContactMessage;
use Event;
use App\Events\ContactMessageSent;

class ContactMessageRepository implements ContactMessageRepositoryInterface {
    public function createContact($contact_data)
    {
        // Also register Event for Mail notification

        $contact_message = new ContactMessage();
        $contact_message->name = $contact_data['name'];
        $contact_message->mail = $contact_data['mail'];
        $contact_message->subject = $contact_data['subject'];
        $contact_message->body = $contact_data['body'];
        $contact_message->read = false;
        $contact_message->save();

        // Event handler to send mail to visitor
        Event::fire(new ContactMessageSent($this, $contact_message->id));

    }

    public function getAllContactMessages($only_unread = false)
    {
        if ($only_unread) {
            return ContactMessage::where('read', false)->get();
        }
        return ContactMessage::all();
    }

    public function getContactMessage($id)
    {
        return ContactMessage::find($id);
    }

    public function markAsRead($id)
    {
        $contact_message = ContactMessage::find($id);
        $contact_message->read = true;
        $contact_message->update();
    }

}