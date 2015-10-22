@extends('layouts.master')

@section('content')
	<section class="products clearfix">
		@foreach($products as $product)
			<article class="product row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>{{ $product->title }}</h1>
					<p>{{ $product->description }}</p>
				</div>
			</article>
		@endforeach
    </section>
@endsection