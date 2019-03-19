@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Messages</h2>
				<table class="striped responsive-table">
					<thead>
						<tr>
							<th width="20px">Id</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th colspan="2">&nbsp;</th>
						</th>
					</thead>
					<tbody>
						@foreach($messages as $message)
							<tr>
								<td>{{ $message->id }}</td>
								<td>{{ $message->name }}</td>
								<td>{{ $message->phone }}</td>
								<td>{{ $message->email }}</td>
								<td width="10px"><a href="{{ route('messages.show', $message->id) }}" class="btn btn-small teal lighten-5 teal-text text-darken-4">Show</a></td>
								<td width="10px">
								{!! Form::open(['route' => ['messages.destroy', $message->id]  , 'method' => 'DELETE']) !!}
									<button class="btn btn-small red lighten-5 red-text text-darken-4">Eliminar</button>
								{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $messages->links('pagination::default') }}
			</div>
		</div>
	</main>
@endsection