@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="center">Portfolio</h1>
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