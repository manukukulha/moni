 @extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Show Category</h2>

				<p><strong>Name:</strong> {{ $category->name }}</p>
				<p><strong>Slug:</strong> {{ $category->slug }}</p>
			</div>
		</div>
	</main>
@endsection