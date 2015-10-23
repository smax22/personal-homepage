@extends('layouts.master')


@section('content')
	<section class="blog-posts clearfix">
		@foreach($posts as $post)
			<article class="blog-post row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>{{ $post->title }}</h1>
					<h6 class="info"><span class="author">{{ $post->author }}</span>, {{ $post->loc_date }}</h6>
					<hr class="divider">
					<div class="body">
						{!! $post->body !!}
						<a href="{{ route('post.show', ['postId' => $post->id, 'postURL' => $post->url]) }}">{{ trans('text.read_more') }}</a>
					</div>
					<!-- ToDo: Include Social sharing options here -->
					@include('partials.social_sharing')
					<!-- Only include when multiple posts exist -->
					<hr class="divider-large">
				</div>
			</article>
		@endforeach
    </section>
@endsection