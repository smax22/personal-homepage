@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <section class="row blog-post-single">
            <article class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-1">
                @include('include.blog_post')
            </article>
            <article class="col-md-3 col-sm-3">
                <div class="col-xs-12">
                    <div class="related-post">
                        <h6>Related Post #1</h6>
                        <p>Description</p>
                    </div>
                    <div class="related-post">
                        <h6>Related Post #2</h6>
                        <p>Description</p>
                    </div>
                </div>
            </article>
        </section>
        <div class="row">
            <section class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-1 comments">
                <article class="comment-overview">
                    4 comments
                </article>
                <hr>
                <div class="comment-control">
                    <a href="#" class="btn-std" id="write-comment">Write comment</a>
                </div>
                <article class="write-comment">
                    <form action="" method="post">
                        <textarea name="body" id="comment-body" rows="4"></textarea>
                        <button type="submit" class="btn-std">Submit</button>
                    </form>
                </article>
                <p>Comment #1</p>
                <p>Comment #2</p>
                <p>Comment #3</p>
                <div class="comment-control">
                    <!-- AJAX call for more comments here -->
                    <a href="#" class="btn-std">Load more comments</a>
                </div>

            </section>
        </div>
    </div>
@endsection