 @extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Show Tag</h2>

				<p><strong>Name:</strong> {{ $tag->name }}</p>
				<p><strong>Slug:</strong> {{ $tag->slug }}</p>
			</div>
		</div>
	</main>
@endsection