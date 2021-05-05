@extends('layouts.app')
@section('content')
<div class="container">
                <h3>{{ __('Register') }}</h3>

                    <form method="POST" class="form-login" action="{{ route('register') }}">
                        @csrf

                            <input id="name" placeholder="Nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                                <input placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                      
                                <input id="password-confirm" placeholder="Confirmez le mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        

                        
                                <button class="submit" type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Déjà un compte? Connectez vous !') }}</a>

                    </form>

</div>

@endsection
