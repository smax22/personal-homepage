@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form method="post" action="{{ isset($product) ? route('product.update') : route('product.create') }}">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="product-title">Titel</label>
							<input class="form-control" type="text" id="product-title" name="title" placeholder="Titel" value="{{ isset($product) ? $product->title : '' }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="description">Beschreibung</label>
							<textarea id="description" name="description" class="form-control" rows="12">{{ isset($product) ? $product->description : '' }}</textarea>
						</div>
						<button class="btn btn-default" type="submit">Submit</button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
						<input type="hidden" name="id" value="{{ isset($product) ? $product->id : '' }}">
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection