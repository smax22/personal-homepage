@extends('layouts.master_admin')
@section('content')
	<form method="post" action="{{ route('post.create') }}">
		<div class="form-group">
			<label for="post-title">Titel</label>
			<input class="form-control" type="text" id="post-title" name="title" placeholder="Titel">
		</div>
		<div class="form-group">
			<label for="post-author">Autor</label>
			<input class="form-control" type="text" id="post-author" name="author" placeholder="Autor">
		</div>
		<div class="form-group">
			<label for="content">Titel</label>
			<textarea id="content" name="content" class="form-control" rows="12"></textarea>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="allow_comments">Allow comments
			</label>
		</div>
		<button class="btn btn-default" type="submit">Submit</button>
		<input type="hidden" name="_token" value="{{ Session::token() }}">
	</form>
	@if(count($errors) > 0)
		Validation errors occured!
	@endif
@endsection