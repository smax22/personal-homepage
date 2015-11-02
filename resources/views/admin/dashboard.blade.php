@extends('layouts.master_admin')

@section('content')
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
                <article>
                    <a href="#">Post Title</a> - <a href="#">Unpublished</a> - 0 comments (Date created) [<a
                            href="#">Edit</a>] [<a href="#">Delete</a>]
                </article>
            </section>
        </div>
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
                    <a href="#">Contact subject</a> - <a href="mailto:xxx@test.com">Mail</a> - Date created [<a href="#">Mark as read</a>]
                </article>
            </section>
        </div>
    </div>
@endsection