@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Edit Work</h2>

				{!!  Form::model($work, ['route' => ['works.update', $work->id], 'method' => 'PUT', 'files' => 'true' ]) !!}

					@include('admin.works.partials.form')
					
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection