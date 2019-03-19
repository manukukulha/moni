@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Edit Post</h2>

				{!!  Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true' ]) !!}

					@include('admin.posts.partials.form')
					
				{!! Form::close() !!}
			</div>
		</div>
	</main>
@endsection