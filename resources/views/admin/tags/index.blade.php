@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Tags</h2>
				<a href="{{ route('tags.create') }}" class="btn btn-small right blue lighten-5 blue-text text-darken-4">Create</a>
				<table class="striped responsive-table">
					<thead>
						<tr>
							<th width="20px">Id</th>
							<th>Tag</th>
							<th>Slug</th>
							<th colspan="3">&nbsp;</th>
						</th>
					</thead>
					<tbody>
						@foreach($tags as $tag)
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td>{{ $tag->slug }}</td>
								<td width="10px"><a href="{{ route('tags.show', $tag->id) }}" class="btn btn-small teal lighten-5 teal-text text-darken-4">Show</a></td>
								<td width="10px"><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Edit</a></td>
								<td width="10px">
								{!! Form::open(['route' => ['tags.destroy', $tag->id]  , 'method' => 'DELETE']) !!}
									<button class="btn btn-small red lighten-5 red-text text-darken-4">Eliminar</button>
								{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $tags->links('pagination::default') }}
			</div>
		</div>
	</main>
@endsection