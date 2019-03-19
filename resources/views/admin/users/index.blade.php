@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Users</h2>
				<a href="{{ route('users.create') }}" class="btn btn-small right blue lighten-5 blue-text text-darken-4">Create</a>
				<table class="striped">
					<thead>
						<tr>
							<th width="20px">Id</th>
							<th width="60px">Avatar</th>
							<th>Name</th>
							<th>Description</th>
							<th colspan="3">&nbsp;</th>
						</th>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td><img src="{{ Storage::url($user->file) }}" class="responsive-img circle" width="60px" alt=""></td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->body }}</td>
								<td width="10px"><a href="{{ route('users.show', $user->id) }}" class="btn btn-small teal lighten-5 teal-text text-darken-4">Show</a></td>
								<td width="10px"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Edit</a></td>
								<td width="10px">
								{!! Form::open(['route' => ['users.destroy', $user->id]  , 'method' => 'DELETE']) !!}
									<button class="btn btn-small red lighten-5 red-text text-darken-4">Eliminar</button>
								{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $users->links('pagination::default') }}
			</div>
		</div>
	</main>
@endsection