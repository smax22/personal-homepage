
@inject('Date', 'Jenssegers\Date\Date')

@if(!is_null($post->main_image))
    <img class="img-responsive header-img" src="{{ URL::to('files/blog/' . $post->main_image) }}" alt="">
@endif
<h1>{{ $post->title }}</h1>
<div class="row">
    <div class="info clearfix">
        <div class="col-sm-4 author-date">{{ $post->author }} | {{ Date::parse($post->created_at)->format('j F Y') }}</div>
        <div class="col-sm-4 col-sm-push-4 tags">
            @foreach($post->tags as $tag)
                <a href="{{ route('blog.by_tag', ['tag' => $tag->name]) }}">#{{ $tag->name }}</a>
            @endforeach
        </div>
        <div class="col-sm-4 col-sm-pull-4 social">@include('include.social')</div>
        <div class="col-sm-12">
            <hr class="separator-blog">
        </div>
    </div>
</div>