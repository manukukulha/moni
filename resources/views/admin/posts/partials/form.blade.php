{{ Form::hidden('user_id', auth()->user()->id ) }}

<div class="input-field">
	{{ Form::label('category_id' , 'Category') }}
	<br>
	{{ Form::select('category_id', $categories, null) }}
</div>

<div class="input-field">
	{{ Form::label('name', 'Name of the Post') }}
	{{ Form::text('name', null , ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL Friendly') }}
	{{ Form::text('slug', null , ['id' => 'slug']) }}
</div>

<div class="file-field input-field">
	<div class="btn red lighten-5">
		{{ Form::label('file', 'Image', ['class' => 'red-text text-darken-4'])}}
		{{ Form::file('file') }}
	</div>

	<div class="file-path-wrapper">
		{{ Form::text('file', null, ['class' => 'file-path'])}}
    </div>
</div>
<div class="row">
	<div class="col m6 s12">
		<div class="input-field">
			{{Form::label('status' , 'Status') }}
			<br>
			<br>
			<p style="display:inline">
				<label>
					{{ Form::radio('status', 'PUBLISHED')}} <span>Published</span>
				</label>
			</p>
			<p style="display:inline">
				<label>
					{{ Form::radio('status', 'DRAFT')}} <span>Draft</span>
				</label>
			</p>
		</div>
	</div>
</div>

<div class="input-field">
	{{ Form::label('tags' , 'Tags') }}
	<br>
	<br>
	<div>
		@foreach($tags as $tag)
			<p style="display:inline">
				<label>
					{{ Form::checkbox('tags[]', $tag->id) }}
					<span>{{ $tag->name }}</span>
				</label>
			</p>
		@endforeach
	</div>
</div>

<div class="input-field">
	{{ Form::label('excerpt' , 'Excerpt') }}
	{{Form::text('excerpt' , null)}}
</div>

<div class="input-field">
	{{ Form::label('body', 'Content of the Post') }}
	<br>
	{{Form::textarea('body', null, ['id' => 'editor'])}}
</div>

<div class="input-field">
	{{ Form::submit('Save', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4']) }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});

		CKEDITOR.config.height = 400;
		CKEDITOR.config.width = 'auto';

		CKEDITOR.replace('body');
	</script>
@endsection