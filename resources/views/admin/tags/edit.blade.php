@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Edit Tag</h2>

				{!!  Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
					@include('admin.tags.partials.form')
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection