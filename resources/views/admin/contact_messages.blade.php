@extends('layouts.master_admin')

@inject('contact_message_repository','App\Http\Contracts\ContactMessageRepositoryInterface')

@section('content')
    @foreach($contact_message_repository->getAllContactMessages(true) as $contact_message)
        <article class="row">
            <div class="col-xs-12">
                <h5><a href="#">{{ $contact_message->subject }}</a></h5>
                <span>{{ $contact_message->name }}</span> | <a href="mailto:{{ $contact_message->mail }}">{{ $contact_message->mail }}</a>
                <p>{{ $contact_message->body }}</p>
                [<a href="{{ route('admin.contact_message_read', ['contact_message' => $contact_message]) }}">Mark as read</a>]
                <hr class="separator-blog">
            </div>
        </article>
    @endforeach
@endsection
