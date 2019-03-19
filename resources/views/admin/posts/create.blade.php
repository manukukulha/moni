@extends('layouts.app')

@section('content')
	<main class="container">
		<div class=" section">
			<div class="card-panel">
				<h2 class="center">Create a new Post</h2>

				{!!  Form::open(['route' => 'posts.store', 'files' => 'true']) !!}

					@include('admin.posts.partials.form')
				
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection

