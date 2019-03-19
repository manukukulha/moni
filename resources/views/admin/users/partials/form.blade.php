<div class="input-field">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null ) }}
</div>

<div class="input-field">
	{{ Form::label('email', 'Email') }}
	{{ Form::email('email', null ) }}
</div>

@unless($user->id)
<div class="input-field">
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', null ) }}
</div>

<div class="input-field">
	{{ Form::label('password_confirmation', 'Password Confirmation') }}
	{{ Form::password('password_confirmation', null, ['id' => 'password-confirm'] ) }}
</div>
@endunless

<div class="file-field input-field">
	<div class="btn red lighten-5">
		{{ Form::label('file', 'Avatar', ['class' => 'red-text text-darken-4'])}}
		{{ Form::file('file') }}
	</div>

	<div class="file-path-wrapper">
		{{ Form::text('file', null, ['class' => 'file-path'])}}
    </div>
</div>

<div class="input-field">
	{{ Form::label('body', 'Description') }}
	{{Form::textarea('body', null, ['class' => 'materialize-textarea', 'data-length' => '144', 'id' => 'counter'])}}
</div>

<div class="input-field">
	{{ Form::submit('Save', ['class' => 'btn btn-small red lighten-5 red-text text-darken-4']) }}
</div>

@section('scripts')
	<script>
		 $(document).ready(function() {
    $('textarea#counter').characterCounter();
  });
	</script>
@endsection
