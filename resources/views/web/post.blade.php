@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-10 offset-md-1">
				<div class="card">
					<div class="card-image">
						@if($post->file)
							<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">	
						@endif
					</div>
					
					<div class="card-content">
						<span class="card-title">{{ $post->name }}</span>
						<p class="small">Author: <a href="{{ route('user', $post->user->name) }}">{{ $post->user->name }}</a></p>
						<p class="small">Date: {{ $post->created_at }}</p>
						<p>{!! $post->body !!}</p>
					</div>
					<div class="card-action">
						<p>Category: <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a></p>
						<p>Tags: 
							@foreach($post->tags as $tag)
								<a href="{{ route('tag', $tag->name) }}">{{ $tag->name }}</a>
							@endforeach

						</p>
					</div>
				</div>
			<div class="d-flex justify-content-center mt-4">
			</div>
		</div>
		
	</div>
@endsection