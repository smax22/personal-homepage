@extends('layouts.master_admin')

@section('content')
    <article class="row">
        <div class="col-xs-12">
            <h5>{{ $post->title }}</h5>
            <a href="{{ route('post.change_publish', ['id' => $post->id, 'state' => $post->published ? 0 : 1]) }}">
                {{ $post->published ? 'Published' : 'Unpublished' }}
            </a> |
            <span>{{ count($post->comments) }} Comments</span> |
            [<a href="{{ route('post.edit', ['post_id' => $post->id]) }}">Edit</a>] |
            [<a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>]
            <p>{{ $post->body }}</p>
        </div>
    </article>
@endsection
