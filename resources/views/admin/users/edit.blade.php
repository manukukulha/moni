@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Edit User</h2>

				{!!  Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
					@include('admin.users.partials.form')
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection