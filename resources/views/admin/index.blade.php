<!-- Admin dashboard -->
@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>Posts &#38; Comments</h1>
				@foreach($posts as $post)
					<p class="admin-post">
						{{ $post->title }} ({{ $post->author }}, {{ $post->created_at }}) 
						@if($post->published === 1)
							<span id="published">Published</span>
							(<a href="{{ route('post.publish', ['postId' => $post->id, 'publishState' => 0]) }}">Withdraw now</a>)
						@else
							<span id="unpublished">Unpublished</span>
							(<a href="{{ route('post.publish', ['postId' => $post->id, 'publishState' => 1]) }}">Publish now</a>)
						@endif
						<a href="{{ route('post.edit', ['postId' => $post->id]) }}">Edit</a>
						<a href="{{ route('post.delete', ['postId' => $post->id]) }}">Delete</a>
					</p>
				@endforeach				
				<form method="get" action="{{ route('post.showAll') }}">
					<button class="btn btn-default" type="submit">Show all Posts</button>
				</form>
				<form method="get" action="{{ route('post.create') }}">
					<button class="btn btn-default" type="submit">New Post</button>
				</form>
			</section>
		</div>
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>Products</h1>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>References</h1>
			</section>
		</div>
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>Config</h1>
			</section>
		</div>
	</div>
@endsection


