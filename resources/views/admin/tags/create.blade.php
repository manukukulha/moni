@extends('layouts.app')

@section('content')
	<main class="container">
		<div class=" section">
			<div class="card-panel">
				<h2 class="center">Create a new Tag</h2>

				{!!  Form::open(['route' => 'tags.store']) !!}
					@include('admin.tags.partials.form')
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection

