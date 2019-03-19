<div class="input-field">
	{{ Form::label('name', 'Name of the Work') }}
	{{ Form::text('name', null , ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL Friendly') }}
	{{ Form::text('slug', null , ['id' => 'slug']) }}
</div>

<div class="input-field">
	{{ Form::label('category_id', 'Categoria') }}
	<br>
	<br>
	@foreach($categories as $category)
		<p style="display:inline">
			<label>
				{{ Form::radio('category_id', $category->id) }}
				<span>{{ $category->name }}</span>
			</label>
		</p>
	@endforeach

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