@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row filter-bar">
            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-2 col-sm-offset-1 col-sm-5 tags">
                Tags
            </div>
            <div class="col-sm-5 col-md-4 search">
                <form>
                    <input type="text" name="filter-search">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
        <section>
            <article class="row blog-post">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    @include('include.blog_post')
                    <div class="read-more">
                        <a class="btn-std" href="#">Read more</a>
                    </div>
                </div>
            </article>
            <article class="row blog-post">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    @include('include.blog_post')
                    <div class="read-more">
                        <a class="btn-std" href="#">Read more</a>
                    </div>
                </div>
            </article>
        </section>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="pagination">
                    Pagination links go here
                </div>
            </div>
        </div>

    </div>
@endsection
