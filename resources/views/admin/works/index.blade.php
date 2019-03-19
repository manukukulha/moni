@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Works</h2>
				<a href="{{ route('works.create') }}" class="btn btn-small right blue lighten-5 blue-text text-darken-4">Create</a>
				<table class="striped">
					<thead>
						<tr>
							<th width="20px">Id</th>
							<th width="200px">Image</th>
							<th>Work</th>
							<th>Slug</th>
							<th colspan="3">&nbsp;</th>
						</th>
					</thead>
					<tbody>
						@foreach($works as $work)
							<tr>
								<td>{{ $work->id }}</td>
								<td><img src="{{ Storage::url($work->file) }}" class="responsive-img" alt=""></td>
								<td>{{ $work->name }}</td>
								<td>{{ $work->slug }}</td>
								<td width="10px"><a href="{{ route('works.show', $work->id) }}" class="btn btn-small teal lighten-5 teal-text text-darken-4">Show</a></td>
								<td width="10px"><a href="{{ route('works.edit', $work->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Edit</a></td>
								<td width="10px">
								{!! Form::open(['route' => ['works.destroy', $work->id]  , 'method' => 'DELETE']) !!}
									<button class="btn btn-small red lighten-5 red-text text-darken-4">Eliminar</button>
								{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $works->links('pagination::default') }}
			</div>
		</div>
	</main>
@endsection