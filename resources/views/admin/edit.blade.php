@extends('layouts.master_admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            @if(Session::has('failure'))
                <section class="alert alert-danger">
                    {{ Session::get('failure') }}
                </section>
            @endif
            @if(count($errors) > 0)
                <section class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </section>
            @endif
            <form action="{{ isset($post) ? route('post.update') : route('post.create') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title" value="{{ Request::old('title') ? Request::old('title') : (isset($post) ? $post->title : '') }}">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input class="form-control" type="text" id="author" name="author" value="{{ Request::old('author') ? Request::old('author') : (isset($post) ? $post->author : '') }}">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" type="text" id="body" name="body" rows="12">{{ Request::old('body') ? Request::old('body') : (isset($post) ? $post->body : '') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea class="form-control" type="text" id="excerpt" name="excerpt" rows="4">{{ Request::old('excerpt') ? Request::old('excerpt') : (isset($post) ? $post->excerpt : '') }}</textarea>
                </div>
                <div class="checkbox">
                    <label for="allow_comments">
                        @if(Request::old('allow_comments') && Request::old('allow_comments') === 1 || isset($post) && $post->allow_comments === 1)
                            <input type="checkbox" id="allow_comments" name="allow_comments" checked>Allow comments
                        @else
                            <input type="checkbox" id="allow_comments" name="allow_comments">Allow comments
                        @endif

                    </label>
                </div>
                <button class="btn-std" type="submit">Submit</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <input type="hidden" value="{{ isset($post) ? $post->id : '' }}" name="post_id">
            </form>
        </div>
    </div>

@endsection