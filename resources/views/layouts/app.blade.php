<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SHIZUKA') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
    <style>
        body{
            margin:0;
        }
        .app-title{
            text-decoration:none;
            color:#fff;
            font-size:20px;
            height:30px;
            padding-top:20px;
            letter-spacing:0.2em;
        }
        .header-section{
            height: 70px;
            background-color:#0067c0;
            position: fixed;
            width: 100vw;
            top: 0;
        }
        .header-section .container{
            display: flex;
            justify-content:space-between;
            width:600px;
            margin:0 auto;
        }
        .navbar-nav{
            list-style-type:none;
            margin:0;
            padding:10px 0 0 0;
        }
        .nav-user{
            text-decoration:none;
            color:#fff;
            font-weight:bold;
            letter-spacing:0.1em;
            margin-bottom:5px;
        }
        .nav-link,
        .dropdown-item{
            text-decoration:none;
            background-color:#fff;
            border:solid 1px #fff;
            border-radius:10px;
            color:#5a5a5a;
            font-size: 14px;
            text-align: center;
            display: block;
            font-weight:bold;
        }
        .main-section{
            margin-top:75px;
        }
        footer{
            height: 70px;
            width: 100vw;
            background-color: #0067c0;
            position: fixed;
            bottom: 0;
        }
        .footer-section{
            display:flex;
            justify-content:space-between;
            margin:0 auto;
            width: 250px;
        }
        .btn-footer{
            background-color: #0067c0;
            border: none;
            color: #fff;
            font-weight: bold;
            font-size: 15px;
            height: 70px;
            padding: 0 10px;
            letter-spacing:0.1em;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <nav class="header-section">
            <div class="container">
                <a class="app-title" href="{{ url('/') }}">
                    {{ config('app.name', 'SHIZUKA') }}
                </a>
                <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>-->

                <div class="nav-section" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
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
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-user" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main-section">
            @yield('content')
        </main>
        <footer>
            <div class="footer-section">
                <button type="submit" onclick="location.href='{{ url('contact/index') }}'" class="btn-footer">
                    HOME
                </button>
                <button type="submit" onclick="location.href='{{ route('contact.create') }}'" class="btn-footer">
                    POST
                </button>
            </div>
         </footer>
    </div>
</body>
</html>
