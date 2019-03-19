@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Edit Work Category</h2>

				{!!  Form::model($category, ['route' => ['category-works.update', $category->id], 'method' => 'PUT', 'files' => 'true' ]) !!}

					@include('admin.work-cats.partials.form')
					
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection