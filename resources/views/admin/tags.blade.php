@extends('layouts.master_admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <form class="form-inline" action="{{ route('tag.create') }}" method="post">
                <div class="form-group">
                    <label for="tag-name">Tag Name</label>
                    <input type="text" id="tag-name" class="form-control" name="name">
                </div>
                <button class="btn-std" type="submit">New Tag</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
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
    @foreach($tags as $tag)
        <article class="row">
            <div class="col-xs-12">
                <h5>{{ $tag->name }}</h5>
                <span>{{ $tag->created_at }}</span>
                [<a href="{{ route('tag.delete', ['tag_id' => $tag->id]) }}">Delete</a>] | [<a href="{{ route('tag.show_as_filter', ['tag_id' => $tag->id, 'show' => $tag->show_as_filter === 1 ? 0 : 1]) }}">{{ $tag->show_as_filter === 1 ? "Don't show as filter" : 'Show as filter' }}</a>]
                <hr class="separator-blog">
            </div>
        </article>
    @endforeach
@endsection
