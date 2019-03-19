@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Posts List</h1>
		<div class="row">
			@foreach($posts as $post)
			
				<div class="col m6 s12">
					<div class="card">
						<div class="card-image">
							@if($post->file)
								<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">	
							@endif
						</div>
						
							
						<div class="card-content">
							<span class="card-title">{{ $post->name }}</span>
							<p class="small">Author: {{ $post->user->name }}</p>
							<p class="small">Date: {{ $post->created_at }}</p>
							<p>{{ $post->excerpt }}</p>
						</div>

						<div class="card-action right-align">
							<a href="{{ route('post', $post->slug) }}" class="">Leer más</a>
						</div>
					</div>	
				</div>
			@endforeach
		</div>
		<div class="center">
			{{ $posts->links('pagination::default')}}
		</div>
	</div>
		
@endsection