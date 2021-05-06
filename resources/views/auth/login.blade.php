@extends('layouts.app')
@section('content')
<img class="logo" style="width:10rem; margin:0 auto;" src="/assets/logo.svg"/>

<div class="container">

            <h3>{{ __('Connexion') }}</h3>

                <form method="POST" class="form-login" action="{{ route('login') }}">
                        @csrf

                                <input id="email" placeholder="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             
                                <input id="password" placeholder="mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @if (Route::has('password.request'))
                                    <a class="left" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label"  for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                    </div>
                                <button type="submit" class="submit">
                                    {{ __('Connexion') }}
                                </button>

                                
                      <a class="nav-link" href="{{ route('register') }}">{{ __("Pas de compte ? S'inscrire !") }}</a>

                    </form>
                </div>
            </div>




@endsection
