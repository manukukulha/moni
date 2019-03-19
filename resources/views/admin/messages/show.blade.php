 @extends('layouts.app')

@section('content')
	<main class="container">
		<div class="section">
			<div class="card-panel">
				<h2 class="center">Show Message</h2>

				<p><strong>Name: </strong> {{ $message->name }}</p>
				<p><strong>Phone: </strong> {{ $message->phone }}</p>
				<p><strong>Email: </strong> {{ $message->email }}</p>
				<p><strong>Message: </strong> {{ $message->body }}</p>
			</div>
		</div>
	</main>
@endsection