@extends('layouts.app')

@section('content')
	<main class="container">
		<div class=" section">
			<div class="card-panel">
				<h2 class="center">Create a new Category</h2>

				{!!  Form::open(['route' => 'categories.store']) !!}
					@include('admin.categories.partials.form')
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection

