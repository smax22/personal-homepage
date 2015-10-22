@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form method="post" action="{{ isset($reference) ? route('reference.update') : route('reference.create') }}">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="reference-title">Titel</label>
							<input class="form-control" type="text" id="reference-title" name="title" placeholder="Titel" value="{{ isset($reference) ? $reference->title : '' }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="reference-customer">Customer</label>
							<input class="form-control" type="text" id="reference-customer" name="customer" placeholder="Kunde" value="{{ isset($reference) ? $reference->customer : '' }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="description">Beschreibung</label>
							<textarea id="description" name="description" class="form-control" rows="12">{{ isset($reference) ? $reference->description : '' }}</textarea>
						</div>
						<button class="btn btn-default" type="submit">Submit</button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
						<input type="hidden" name="id" value="{{ isset($reference) ? $reference->id : '' }}">
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection