@extends('layouts.master_admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a class="btn-std" href="#">New Post</a>
        </div>
    </div>
    <article class="row">
        <div class="col-xs-12">
            <h5>Post title</h5>
            <span>Published</span> | <span>X Comments</span> | [<a href="#">Edit</a>] | [<a href="#">Delete</a>]
            <p>Excerpt</p>
            <hr class="separator-blog">
        </div>
    </article>
    <article class="row">
        <div class="col-xs-12">
            <h5>Post title</h5>
            <span>Published</span> | <span>X Comments</span> | [<a href="#">Edit</a>] | [<a href="#">Delete</a>]
            <p>Excerpt</p>
        </div>
    </article>
@endsection
