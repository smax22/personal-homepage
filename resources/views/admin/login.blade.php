@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form id="admin-login" method="post" action="{{ route('admin.login') }}">
				<div class="form-group{{ $errors->has('admin-name') ? ' has-error' : '' }}">
					<label for="admin-name">Admin</label>
					<input type="text" class="form-control" id="admin-name" name="admin-name" placeholder="Admin">
					@if($errors->has('admin-name'))
						<span class="help-block">{{ $errors->first('admin-name') }}</span>
					@endif
				</div>
				<div class="form-group{{ $errors->has('admin-password') ? ' has-error' : '' }}">
					<label for="admin-password">Passwort</label>
					<input type="password" class="form-control" id="admin-password" name="admin-password">
					@if($errors->has('admin-password'))
						<span class="help-block">{{ $errors->first('admin-password') }}</span>
					@endif
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
@endsection