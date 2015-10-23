@extends('layouts.master')

@section('content')
	<section class="references clearfix">
		@foreach($references as $reference)
			<article class="reference row">
				<div class="col-lg-8 col-lg-offset-2">
					<h3>{{ $reference->title }} - {{ $reference->customer }}</h3>
					<p>{{ $reference->description }}</p>
				</div>
			</article>
		@endforeach
    </section>
@endsection