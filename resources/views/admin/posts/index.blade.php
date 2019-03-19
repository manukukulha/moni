@extends('layouts.app')

@section('content')
	<main class="container">
		<div class="center section">
			<div class="card-panel">
				<h2>Posts</h2>
				<a href="{{ route('posts.create') }}" class="btn btn-small right blue lighten-4 blue-text text-darken-4">Create</a>
				<table class="striped responsive-table">
					<thead>
						<tr>
							<th width="20px">Id</th>
							<th width="200px">Image</th>
							<th>Post</th>
							<th>Slug</th>
							<th colspan="3">&nbsp;</th>
						</th>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td>{{ $post->id }}</td>
								<td><img src="{{ Storage::url($post->file) }}" class="responsive-img" alt=""></td>
								<td>{{ $post->name }}</td>
								<td>{{ $post->slug }}</td>
								<td width="10px"><a href="{{ route('posts.show', $post->id) }}" class="btn btn-small teal lighten-5 teal-text text-darken-4">Show</a></td>
								<td width="10px"><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-small orange lighten-5 orange-text text-darken-4">Edit</a></td>
								<td width="10px">
								{!! Form::open(['route' => ['posts.destroy', $post->id]  , 'method' => 'DELETE']) !!}
									<button class="btn btn-small red lighten-5 red-text text-darken-4">Eliminar</button>
								{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="center">
				{{ $posts->links('pagination::default') }}
			</div>
		</div>
	</main>
@endsection