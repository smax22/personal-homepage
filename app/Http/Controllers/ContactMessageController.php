<?php
namespace App\Http\Controllers;

use App\Events\ContactMessageSent;
use App\Http\Contracts\ContactMessageRepositoryInterface;
use Illuminate\Http\Request;

class ContactMessageController extends Controller {

    /**
     * ContactMessageController constructor.
     */
    public function __construct(ContactMessageRepositoryInterface $contact_message)
    {
        $this->contact_message = $contact_message;
    }

    public function getContactMessageIndex() {
        return view('admin.contact_messages');
    }

    public function postSendContactMessage(Request $request) {
        $this->validate($request, [
           'name' => 'required',
            'mail' => 'required|email',
            'subject' => 'required',
            'body' => 'required'
        ]);

        $contact_data = [
            'name' => $request['name'],
            'mail' => $request['mail'],
            'subject' => $request['subject'],
            'body' => $request['body'],
        ];

        // Store contact message in DB
        $this->contact_message->createContact($contact_data);

        return redirect()->back()->with(['success' => trans('ui_text.contact.success.message-sent')]);
    }

    public function getMarkAsRead($contact_message_id) {
        $this->contact_message->markAsRead($contact_message_id);
        return redirect()->back();
    }
}