<html>
<head>
<meta charset='utf-8'>
<title>Daisy</title>
<link href='/css/style.css' type='text/css' rel="stylesheet" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<nav>
<<<<<<< HEAD
                            <a href='/'><img src="/images/uploads/1/oui.png"/></a>
                            <a href='/about'>ABOUT</a>
=======
                            <a href='/index'>Home page</a>
>>>>>>> d180b81d4d08bcd9776d39e4c2c8949f5577bc67
                            </nav>
@guest
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
                        <a href='/photos/create'>Create</a>

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


