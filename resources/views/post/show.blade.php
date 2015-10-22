@extends('layouts.master')
@section('content')
	<section class="blog-post row">
		<div class="col-lg-8 col-lg-offset-2">
			<h3 class="title">{{ $post->title }}</h3>
			<h5 class="author">{{ $post->author }}, {{ $post->created_at }}</h5>
			<hr class="divider">
			<p class="body">{{ $post->body }}</p>
			@include('partials.social_sharing')
			<hr class="divider-large">
		</div>
	</section>
	<!-- Should be togglable via jQuery -->
	<div class="row">
		<div id="toggle-compose-comment" class="col-md-8 col-md-offset-2">
			<h4>{{ trans('text.write_comment') }}</h4>
		</div>
	</div>
	<div id="compose-comment" class="row">
		<div class="col-md-8 col-md-offset-2">
			<form method="post" action="{{ route('comment.create') }}">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="comment-author">{{ trans('text.author') }}</label>
							<input class="form-control" type="text" id="comment-author" name="author" placeholder="{{ trans('text.author') }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label for="comment-body">{{ trans_choice('text.comment', 1) }}</label>
							<textarea class="form-control" type="text" id="comment-body" name="body" placeholder="{{ trans_choice('text.comment', 1) }}" rows="6"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<button class="btn btn-default" type="submit">{{ trans('text.submit') }}</button>
						</div>
						<input type="hidden" value="{{ Session::token() }}" name="_token">
						<input type="hidden" value="{{ $post->id }}" name="postId">
					</div>
				</div>
			</form>
		</div>
	</div>
	<section class="comments">
		@foreach($comments as $comment)
			<article class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="comment">
						<p>{{ $comment->body }}</p>
						<p>{{ $comment->author }}</p>
					</div>
				</div>
			</article>
		@endforeach
		<div class="row">
			<div class="col-md-2 col-md-offset-5">
				<button class="btn btn-default" type="submit">{{ trans('text.load_comments') }}</button>
			</div>
		</div>
	</section>
@endsection