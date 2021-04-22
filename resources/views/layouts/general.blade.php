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
    @include('socialite.login-register')
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    
    @endif
    
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    @else
    <nav class="menu">
        <a href='/'><img src="/assets/home.svg" alt="Home"/></a>
        <a href='/photos/create'><img src="/assets/plus-circle.svg" alt="Create a Post"/></a>
        <a href='/herbarium'><img src="/assets/book.svg" alt="Herbarium"/></a>
        <a href="/users/{{ Auth::user()->id }}"><img src="/assets/user.svg" alt="Profil"/></a>
    </nav>
        <li>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
    
    <main>
        @yield('content')
    </main>
@endguest
</div>