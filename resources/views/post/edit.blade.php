@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form method="post" action="{{ isset($post) ? route('post.update') : route('post.create') }}">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="post-title">Titel</label>
							<input class="form-control" type="text" id="post-title" name="title" placeholder="Titel" value="{{ isset($post) ? $post->title : '' }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="post-author">Autor</label>
							<input class="form-control" type="text" id="post-author" name="author" placeholder="Autor" value="{{ isset($post) ? $post->author : '' }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="content">Inhalt</label>
							<textarea id="content" name="content" class="form-control" rows="12">{{ isset($post) ? $post->body : '' }}</textarea>
						</div>
						<div class="checkbox">
							<label>
								@if(isset($post) && $post->allow_comments === 1)
									<input type="checkbox" name="allow_comments" checked>Allow comments
								@else
									<input type="checkbox" name="allow_comments">Allow comments
								@endif
							</label>
						</div>
						<button class="btn btn-default" type="submit">Submit</button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
						<input type="hidden" name="id" value="{{ isset($post) ? $post->id : '' }}">		
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="{{ URL::asset('src/vendor/ckeditor/ckeditor.js') }}"></script>
		<script>
                CKEDITOR.replace( 'content' );
        </script>
@endsection