@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div id="new-product">
				<form method="get" action="{{ route('product.create') }}">
					<button class="btn btn-default" type="submit">New product</button>
				</form>
			</div>
			@foreach($products as $product)
			<div class="admin-product">
				<h3>{{ $product->title }}</h3>
				<a href="{{ route('product.edit', ['productId' => $product->id]) }}">Edit</a>
				<a href="{{ route('product.delete', ['productId' => $product->id]) }}">Delete</a>
				<h5>{{ $product->created_at }}</h5>
				<p>{{ $product->description }}</p>
				<hr>
			</div>
			@endforeach
		</div>
	</div>
@endsection