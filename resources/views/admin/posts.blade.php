@extends('layouts.master_admin')

@inject('post_repository','App\Http\Contracts\PostRepositoryInterface')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a class="btn-std" href="{{ route('post.create') }}">New Post</a>
        </div>
    </div>
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
    @foreach($post_repository->getAllPosts() as $post)
        <article class="row">
            <div class="col-xs-12">
                <h5>{{ $post->title }}</h5>
                <a href="{{ route('post.change_publish', ['id' => $post->id, 'state' => $post->published ? 0 : 1]) }}">{{ $post->published ? 'Published' : 'Unpublished' }}</a> | <span>{{ count($post->comments) }} Comments</span> | [<a href="{{ route('post.edit', ['post' => $post]) }}">Edit</a>] | [<a href="{{ route('post.delete', ['post' => $post]) }}">Delete</a>]
                <p>{{ $post->excerpt }}</p>
                <hr class="separator-blog">
            </div>
        </article>
    @endforeach
@endsection
