<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Test</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b63de5bfdc.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Noto+Sans+JP:wght@500&family=Source+Sans+Pro&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


</head>
<body>
<div id="app">
    <nav id="nav-custom" class="navbar fixed-top navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="/test.blade.php"> <!--for href if logged in take them to home, if not take them to index -->
                <img src="{{ asset('img/voisty_logo_white_shadow.png') }}" alt="Logo" width="60px">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto mt-3 logo">
                    <a class="logo-name" href="/test.blade.php">Voisty</a>

                </ul>



                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    <li class="nav-item">
                        <a href="#" id="nav-link-custom" class="nav-link"> <span class="fas fa-user"></span>{{ __(' Mario') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/up.blade.php')}}" id="nav-link-custom" class="nav-link"> <span class="fas fa-upload"></span>{{ __(' Upload') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout')}}" id="nav-link-custom" class="nav-link"> <span class="fas fa-sign-out-alt"></span>{{ __(' logout') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

{{-- Add this instead if user isn't logged in --}}

{{-- <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" id="nav-link-custom" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span>{{ __(' Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">


                <a class="nav-link " id="nav-link-custom" href="{{ route('register') }}"><span class="fas fa-user-plus"></span>{{ __(' Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
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
    @endguest
</ul> --}}
