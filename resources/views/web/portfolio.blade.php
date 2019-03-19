@extends('layouts.app')

@section('content')
	<div class="container section">
		<h1 class="center">Portfolio</h1>
		<div class="section">
			@foreach($categories as $category)
				<a href="{{ route('category-work', $category->slug) }}" class="btn btn-small deep-purple lighten-5 deep-purple-text text-darken-4">{{ $category->name }}</a>
			@endforeach
				<a href="{{ route('work') }}" class="btn btn-small deep-purple lighten-5 deep-purple-text text-darken-4">All</a>

		</div>
		<div class="row">
			@foreach($works as $work)
			
				<div class="col m4 s12">

					<a href="{{ Storage::url($work->file) }}" data-lightbox="work" data-title="{{ $work->name }}" data-alt="{{ $work->name }}"><img src="{{ Storage::url($work->file) }}" class="responsive-img" alt=""></a>
				</div>
			@endforeach
		</div>
		<div class="center">
			{{ $works->links('pagination::default')}}
		</div>

		{{ $works->links('pagination::default') }}
	</div>
		
@endsection