@extends('layouts.master_admin')

@inject('post_repository','App\Http\Contracts\PostRepositoryInterface')

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
                        <a href="#">{{ $post->title }}</a> - <a
                                href="{{ route('post.change_publish', ['id' => $post->id, 'state' => $post->published ? 0 : 1]) }}">{{ $post->published ? 'Published' : 'Unpublished' }}</a>
                        - {{ count($post->comments) }} comments ({{ $post->updated_at }}) [<a
                                href="{{ route('post.edit', ['post' => $post]) }}">Edit</a>] [<a href="{{ route('post.delete', ['post' => $post]) }}">Delete</a>]
                    </article>
                @endforeach
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <section class="admin-section">
                <h5>Comments</h5>
                <article>
                    <a href="#">Comment</a> - Post Title (Date created) [<a href="#">Delete</a>]
                </article>
            </section>
        </div>
        <div class="col-xs-6">
            <section class="admin-section">
                <h5>Contact</h5>
                <article>
                    <a href="#">Contact subject</a> - <a href="mailto:xxx@test.com">Mail</a> - Date created [<a
                            href="#">Mark as read</a>]
                </article>
            </section>
        </div>
    </div>


@endsection