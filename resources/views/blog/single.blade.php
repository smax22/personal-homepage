@extends('layouts.master')

@inject('Date', 'Jenssegers\Date\Date')

@section('content')
    <div class="container-fluid">
        <section class="row blog-post-single">
            <article class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-1">
                @include('include.blog_post')
                <div class="body">
                    {!! $post->body !!}
                </div>
            </article>
            <article class="col-md-3 col-sm-3">
                <div class="col-xs-12">
                    @foreach($post->related_posts as $related_post)

                        <div class="related-post">
                            <a href="{{ route('blog.post', ['post_id' => $related_post->id, 'seo_url' => str_replace(' ', '-', $related_post->title)]) }}">
                                <h6>{{ $related_post->title }}</h6>

                                <p>{{ Date::parse($related_post->created_at)->format('j F Y') }}</p>
                            </a>
                        </div>

                    @endforeach
                </div>
            </article>
        </section>
        @if($post->allow_comments)
            <section class="row">
                <article class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-1">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                         */

                        var disqus_config = function () {
                            this.page.url = '{{ Request::url() }}'; // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = '{{ Request::path() }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };

                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');

                            s.src = '//mschwarzmueller.disqus.com/embed.js';

                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                </article>
            </section>
            <script id="dsq-count-scr" src="//mschwarzmueller.disqus.com/count.js" async></script>
        @endif

        {{--<div class="row">--}}
        {{--<section class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-1 comments">--}}
        {{--<article class="comment-overview">--}}
        {{--4 comments--}}
        {{--</article>--}}
        {{--<hr>--}}
        {{--<div class="comment-control">--}}
        {{--<a href="#" class="btn-std" id="write-comment">Write comment</a>--}}
        {{--</div>--}}
        {{--<article class="write-comment">--}}
        {{--<form action="" method="post">--}}
        {{--<textarea name="body" id="comment-body" rows="4"></textarea>--}}
        {{--<button type="submit" class="btn-std">Submit</button>--}}
        {{--</form>--}}
        {{--</article>--}}
        {{--<p>Comment #1</p>--}}
        {{--<p>Comment #2</p>--}}
        {{--<p>Comment #3</p>--}}
        {{--<div class="comment-control">--}}
        {{--<!-- AJAX call for more comments here -->--}}
        {{--<a href="#" class="btn-std">Load more comments</a>--}}
        {{--</div>--}}

        {{--</section>--}}
        {{--</div>--}}
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("img").addClass("img-responsive");
            $("table").addClass("table");
            $("table").wrap("<div class='table-responsive'></div>");
        });
    </script>
@endsection