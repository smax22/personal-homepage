<?php

namespace App\Events;

use App\Events\Event;
use App\Http\Contracts\ContactMessageRepositoryInterface;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ContactMessageSent extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ContactMessageRepositoryInterface $contact_message, $id)
    {
        $this->contact_message = $contact_message->getContactMessage($id);
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
