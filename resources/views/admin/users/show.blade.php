 @extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Show User</h2>

				<img src="{{ $user->file }}" alt="">
				<p><strong>Name:</strong> {{ $user->name }}</p>
				<p><strong>Description:</strong> {{ $user->body }}</p>
			</div>
		</div>
	</main>
@endsection