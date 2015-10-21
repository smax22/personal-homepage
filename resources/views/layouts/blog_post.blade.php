<article class="blog-post">
	<h1>{{ $post->title }}</h1>
	<h6 class="info">{{ $post->author }}, {{ $post->created_at }}</h6>
	<hr class="divider">
	<div class="body">{!! $post->body !!}</div>
</article>
