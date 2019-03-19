 @extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>{{ $work->name }}</h2>
				<img src="{{ Storage::url($work->file) }}" alt="" class="responsive-img">
			</div>
		</div>
	</main>
@endsection