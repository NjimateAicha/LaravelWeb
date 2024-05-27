<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aicha\'s Portfolio') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .navbar {
            background-color: #7777af;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
        }
        .sidebar {
            background-color: #f8f9fa;
            border-right: 1px solid #e7e7e7;
        }
        .sidebar .nav-link {
            color: #7777af;
        }
        .sidebar .nav-link:hover {
            color: #7777af;
        }
        footer {
            background-color: #f8f9fa;
            border-top: 1px solid #e7e7e7;
            padding: 10px 0;
        }
        footer p {
            margin: 0;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Projet Langage du WEB
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block sidebar">
                    <div class="position-sticky pt-3" style="height: 400px">
                        <ul class="nav flex-column">
                            @auth
                                <li class="nav-item ">    
                                    <a class="nav-link active" aria-current="page" href="{{ route('aProposDeMoi.index') }}">À propos de moi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('projets.index') }}">Mes Projets</a>
                                </li>
                               
                            @endauth
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>

        <footer class="bg-light py-4">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        {{-- <p>Contactez Moi :</p> --}}
                        <p class="d-inline">Contactez Moi : <span style="color: blue;">njimateaicha@gmail.com</span></p>
                    </div>
                    <div class="col-md-6">
                        <p class="d-inline-block me-2 mb-0">Suivez Moi :</p>
                        <a href="https://www.linkedin.com/" class="text-blue-500 hover:text-blue-700 d-inline-block" target="_blank">LinkedIn</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
