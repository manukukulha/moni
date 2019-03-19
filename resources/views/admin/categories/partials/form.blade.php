<div class="input-field">
	{{ Form::label('name', 'Name of the Tag') }}
	{{ Form::text('name', null , ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL Friendly') }}
	{{ Form::text('slug', null , ['id' => 'slug']) }}
</div>

<div class="input-field">
	{{ Form::label('body', 'Description') }}
	{{Form::textarea('body', null, ['class' => 'materialize-textarea'])}}
</div>

<div class="input-field">
	{{ Form::submit('Save', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4']) }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});

	</script>
@endsection