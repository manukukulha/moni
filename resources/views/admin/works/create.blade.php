@extends('layouts.app')

@section('content')
	<main class="container">
		<div class=" section">
			<div class="card-panel">
				<h2 class="center">Create a new Work</h2>

				{!!  Form::open(['route' => 'works.store', 'files' => 'true']) !!}

					@include('admin.works.partials.form')
				
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection

