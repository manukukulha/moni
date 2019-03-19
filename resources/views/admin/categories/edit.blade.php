@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Edit Category</h2>

				{!!  Form::model($category, ['route' => ['categrories.update', $category->id], 'method' => 'PUT']) !!}
					@include('admin.categories.partials.form')
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection