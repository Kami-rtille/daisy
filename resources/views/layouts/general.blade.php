<html>
<head>
<meta charset='utf-8'>
<title>Daisy</title>
<link href='/css/style.css' type='text/css' rel="stylesheet" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>  
<div class="container">
@guest
<section>
<img class="background" src="assets/bg.png"/>

<img class="logo" src="/assets/daisy.png"/>

<div class="social-btn">
@include('socialite.login-register')
    @if (1||Route::has('login'))
            <a class="white" class="nav-link" href="{{ route('login') }}">{{ __('Continuer avec e-mail') }}</a>
     </div>


    @endif
    @if (Route::has('register'))
            <a class="nav-link" id="redirection" href="{{ route('register') }}">{{ __('Pas encore de compte ? Inscris-toi') }}</a>
    @endif
</section>
    @else
    <nav class="menu">
        <a href='/'><img src="/assets/home.svg" alt="Home"/></a>
        <a href='/photos/create'><img src="/assets/plus-circle.svg" alt="Create a Post"/></a>
        <a href='/herbarium'><img src="/assets/book.svg" alt="Herbarium"/></a>
        <a href="/users/{{ Auth::user()->id }}"><img src="/assets/user.svg" alt="Profil"/></a>
    </nav>
    
    <div class="header">
            <a class="logo" href="/">
                <img src="/assets/logo.svg"/>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Déconnexion') }}
            </a>
       
    </div>
    
    <main>
        @yield('content')
    </main>
@endguest
</div>