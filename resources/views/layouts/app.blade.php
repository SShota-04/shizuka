<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SHIZUKA</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}">-->
    <style>
        body{
            margin:0;
        }
        /* header */
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

        /* main */
        .main-section{
            margin-top:75px;
            margin-bottom: 75px;
            overflow-y:scroll;
        }
        .post-body{
            width:500px;
            margin:0 auto;
        }
        .search-section{
            height:70px;
            padding-top:10px;
            margin-bottom:20px;
            text-align:center;
        }
        .search-box{
            height:40px;
            width:200px;
            padding:5px;
            border:none;
            outline:none;
            border-bottom: solid 1.5px #0067c0;
        }
        .btn-search{
            margin-left:10px;
            padding:5px;
            height:30px;
            color:#fff;
            background-color:#2876b9;
            border:solid 1px #2876b9;
            border-radius:5px;
        }

        /* index post */
        .post-box{
            margin-bottom:30px;
            border-radius: 3px;
            box-shadow: 0 10px 10px 1px rgba(1, 56, 104, 0.42);
        }
        .post-header{
            height:60px;
            width:430px;
            margin:0 auto;
            color:#5a5a5a;
            padding:15px 20px;
            border-bottom:solid 1px #004B8C;
        }
        .post-header p{
            margin:0;
        }
        .post-title{
            padding-bottom:10px;
            font-weight:bold;
            overflow-wrap: normal;
        }
        .post-date{
            font-size:8px;
        }
        .post-content{
            height: 200px;
            padding: 10px 20px;
            overflow-y: auto;
            overflow-wrap: normal;
        }
        .post-footer{
            height:50px;
            display:flex;
            justify-content: space-evenly;
        }
        .post-footer a{
            height:25px;
            width:80px;
            padding:5px;
            color:#fff;
            background-color:#2876b9;
            text-decoration:none;
            border:solid 1px #2876b9;
            border-radius:5px;
            letter-spacing:0.1em;
            display:block;
            text-align:center;
        }

        /* footer */
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

        /* create */
        .create-body{
            width:500px;
            margin:0 auto;
        }
        .post-theme{
            text-align:center;
            font-size:20px;
            font-weight:bold;
            color:#0067c0;
        }
        .form-flex{
            display:flex;
            justify-content:space-between;
            margin-bottom:40px;
        }
        .form-flex dt{
            font-size: 20px;
            color: #5a5a5a;
        }
        .form-flex dd{
            width:350px;
        }
        .form-input{
            width: 100%;
            height: 25px;
            padding: 3px;
        }
        .form-flex textarea{
            width:100%;
            height:250px;
            padding:5px;
        }
        .form-btn{
            background-color: #0067c0;
            border: solid 1px #0067c0;
            color: #fff;
            font-weight: bold;
            font-size: 15px;
            height: 45px;
            padding: 0 10px;
            letter-spacing: 0.1em;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
        }

        /* show */

    </style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <nav class="header-section">
            <div class="container">
                <a class="app-title" href="{{ url('/') }}">
                    SHIZUKA
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
