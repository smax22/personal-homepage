@extends('layouts.master_admin')

@inject('comment_repository','App\Http\Contracts\CommentRepositoryInterface')
@inject('post_repository','App\Http\Contracts\PostRepositoryInterface')
@inject('contact_message_repository','App\Http\Contracts\ContactMessageRepositoryInterface')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @if(Session::has('failure'))
                <section class="alert alert-danger">
                    {{ Session::get('failure') }}
                </section>
            @elseif(Session::has('success'))
                <section class="alert alert-success">
                    {{ Session::get('success') }}
                </section>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <section class="admin-section">
                <h5>Analytics</h5>
                ...
            </section>
        </div>
        <div class="col-xs-6">
            <section class="admin-section">
                <h5>Posts</h5>
                @foreach($post_repository->getAllPosts() as $post)
                    <article>
                        <a href="{{ route('post.view', ['post_id' => $post->id]) }}">{{ $post->title }}</a> - <a href="{{ route('post.change_publish', ['id' => $post->id, 'state' => $post->published ? 0 : 1]) }}">{{ $post->published ? 'Published' : 'Unpublished' }}</a>
                        - {{ count($post->comments) }} comments ({{ $post->updated_at }}) [<a href="{{ route('post.edit', ['post_id' => $post->id]) }}">Edit</a>] [<a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>]
                    </article>
                @endforeach
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <section class="admin-section">
                <h5>Comments</h5>
                @foreach($comment_repository->getAllComments() as $comment)
                    <article>
                        $comment->body - ({{ $comment->created_at }}) [<a href="{{ route('comment.delete', ['comment_id' => $comment->id]) }}">Delete</a>]
                    </article>
                @endforeach
            </section>
        </div>
        <div class="col-xs-6">
            <section class="admin-section">
                <h5>Contact</h5>
                @foreach($contact_message_repository->getAllContactMessages(true) as $contact_message)
                    <article>
                        <a href="#">{{ $contact_message->subject }}</a> - <a href="mailto:{{ $contact_message->mail }}">{{ $contact_message->mail }}</a> - {{ $contact_message->created_at }} [<a href="{{ route('admin.contact_message_read', ['contact_message' => $contact_message]) }}">Mark as read</a>]
                    </article>
                @endforeach
            </section>
        </div>
    </div>


@endsection