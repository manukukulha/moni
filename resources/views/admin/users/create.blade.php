@extends('layouts.app')

@section('content')
	<main class="container">
		<div class=" section">
			<div class="card-panel">
				<h2 class="center">Create a new User</h2>

				{!!  Form::open(['route' => 'users.store', 'files' => 'true']) !!}
					@include('admin.users.partials.form', ['user' => new App\User])
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection

