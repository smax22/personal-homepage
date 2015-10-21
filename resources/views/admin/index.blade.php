<!-- Admin dashboard -->
@extends('layouts.master_admin')
@section('content')
	<div class="row">
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>Posts &#38; Comments</h1>
				@foreach($posts as $post)
					<p>{{ $post->title }} ({{ $post->author }}, {{ $post->created_at }})</p>
				@endforeach
			</section>
		</div>
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>Products</h1>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>References</h1>
			</section>
		</div>
		<div class="col-lg-6 admin-dashboard">
			<section>
				<h1>Config</h1>
			</section>
		</div>
	</div>
@endsection


