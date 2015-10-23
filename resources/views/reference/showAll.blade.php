@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div id="new-reference">
				<form method="get" action="{{ route('reference.create') }}">
					<button class="btn btn-default" type="submit">New reference</button>
				</form>
			</div>
			@foreach($references as $reference)
			<div class="admin-reference">
				<h4>{{ $reference->title }}</h4>
				<a href="{{ route('reference.edit', ['referenceId' => $reference->id]) }}">Edit</a>
				<a href="{{ route('reference.delete', ['referenceId' => $reference->id]) }}">Delete</a>
				<h5>{{ $reference->customer }}, {{ $reference->created_at }}</h5>
				<p>{{ $reference->description }}</p>
				<hr>
			</div>
			@endforeach
		</div>
	</div>
@endsection