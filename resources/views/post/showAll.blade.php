@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div id="new-post">
				<form method="get" action="{{ route('post.create') }}">
					<button class="btn btn-default" type="submit">New Post</button>
				</form>
			</div>
			@foreach($posts as $post)
			<div class="admin-post">
				<h3>{{ $post->title }}</h3>
				<a href="{{ route('post.edit', ['postId' => $post->id]) }}">Edit</a>
				<a href="{{ route('post.delete', ['postId' => $post->id]) }}">Delete</a>
				<p>
					@if($post->published === 1)
						<span id="published">Published</span>
						(<a href="{{ route('post.publish', ['postId' => $post->id, 'publishState' => 0]) }}">Withdraw now</a>)
					@else
						<span id="unpublished">Unpublished</span>
						(<a href="{{ route('post.publish', ['postId' => $post->id, 'publishState' => 1]) }}">Publish now</a>)
					@endif
				</p>
				<p>
					@if(count($post->comments) > 0)
						<a href="">{{ count($post->comments) }} Comments</a>
					@else
						No comments
					@endif
				</p>
				<h5>{{ $post->author }}, {{ $post->created_at }}</h5>
				<p>{{ $post->body }}</p>
				<hr>
			</div>
			@endforeach
		</div>
	</div>
@endsection