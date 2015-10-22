@extends('layouts.master')
@section('content')
	<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			<h3>{{ trans('text.contact_headline') }}</h3>
			<form id="contact-mail">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="name">{{ trans('text.last_name') }}*</label>
							<input class="form-control" type="text" id="name" name="name" placeholder="{{ trans('text.last_name') }}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="first_name">{{ trans('text.first_name') }}</label>
							<input class="form-control" type="text" id="first_name" name="first_name" placeholder="{{ trans('text.first_name') }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="email">{{ trans('text.email') }}*</label>
							<input class="form-control" type="email" id="email" name="email" placeholder="{{ trans('text.email') }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="subject">{{ trans('text.subject') }}*</label>
							<input class="form-control" type="text" id="subject" name="subject" placeholder="{{ trans('text.subject') }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label for="body">{{ trans('text.message') }}</label>
							<textarea class="form-control" type="text" id="body" name="nachricht" placeholder="{{ trans('text.message') }}" rows="12"></textarea>
						</div>
					</div>
				</div>
				<button class="btn btn-default" type="submit">{{ trans('text.submit') }}</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</div>
@endsection