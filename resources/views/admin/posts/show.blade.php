 @extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>{{ $post->name }}</h2>
				<img src="{{ $post->file }}" alt="" class="responsive-img">
				<p><strong>Author:</strong> {{ $post->user->name }}</p>
				<p><strong>Slug:</strong> {{ $post->slug }}</p>
				<p>{{ $post->body }}</p>
				<p>Category: <a href="">{{ $post->category->name }}</a></p>
				<p>Tags: 
					
				</p>
			</div>
		</div>
	</main>
@endsection