@extends('layouts.master')

@inject('tag_repository','App\Http\Contracts\TagRepositoryInterface')

@section('content')

    <div class="container-fluid">
        <div class="row filter-bar">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 col-sm-offset-1 col-sm-10 tags">
                @foreach($tag_repository->getAllTags(true) as $tag)
                    <a href="{{ route('blog.by_tag', ['tag' => $tag->name]) }}">#{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
        <section>
            @foreach($posts as $post)
                <article class="row blog-post">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        @include('include.blog_post')
                        <div class="body">{{ $post->excerpt }}
                        </div>
                        <div class="read-more">
                            <a class="btn-std" href="{{ route('blog.post', ['post_id' => $post->id, 'seo_url' => str_replace(' ', '-', $post->title)]) }}">Read more</a>
                        </div>
                    </div>
                </article>
            @endforeach
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
