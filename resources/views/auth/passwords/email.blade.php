@extends('layouts.app')

@section('content')
<div class="container">
   
                <h3>{{ __('Réinitialiser le mot de passe') }}</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" class="form-login" action="{{ route('password.email') }}">
                        @csrf

        
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                       
                                <button class="submit" type="submit" class="btn btn-primary">
                                    {{ __('Réinitialiser') }}
                                </button>
                    
                    </form>
    
</div>
@endsection
