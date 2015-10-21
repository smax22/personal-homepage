@extends('layouts.master')

@section('main-image')
	<img class="img-responsive" src="src/images/upscope-main-logo.svg" id="main-img"></img>
@endsection

@section('content')
	<section class="blog-posts">
		@foreach($posts as $post)
			<!-- Only include snippets here -->
			@include('layouts.blog_post')
			<!-- ToDo: Include Social sharing options here -->
			@include('partials.social_sharing')
			<!-- Only include when multiple posts exist -->
			<div class="divider"></div>
		@endforeach
	</section>
@endsection