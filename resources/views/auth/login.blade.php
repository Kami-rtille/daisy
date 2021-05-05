@extends('layouts.app')
@section('content')
<div class="container">
 <form method="POST"  action="{{ route('login') }}">
   @csrf

 <input id="email" placeholder= "email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror
                      
<input id="password" placeholder="Mot de Passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
     @enderror

                        
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        

                        
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
<br/>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                      
                    </form>
                    </div>
                    </div>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

@endsection
