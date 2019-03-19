@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col m10 offset-m1">
            <div class="card section">
                <div class="card-image "><h2 class="center">Login</h2></div>

                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-field">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="helper-text red-text" ><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>

                        <div class="input-field">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="helper-text red-text"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                        </div>
                        <div class="input-field">
                            <p>
                                <label>
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                                   <span>Remember</span>
                                </label>
                            </p>
                        </div>

                        <div class="input-filed">
                            <button type="submit" class="btn btn-small red">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-small red" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
