<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aicha') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h3>Aicha APP</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
            <div class="row ">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="position-sticky pt-3" style="height: 400px">

                        <ul class="nav flex-column">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('aProposDeMoi.index') }}">À propos de moi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('projets.index') }}">Mes Projets</a>
                                </li>
                            @endauth
                        </ul>


                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content') </main>
            </div>
        </div>

        <footer class="bg-gray-200 py-4 pt-56">
            <div class="container mx-auto">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="text-gray-600">
                            <p>Contactez Moi :</p>
                            <p class="d-inline">Téléphone : <span style="color: blue;">(+212) 6 21</span></p>
                            <br>
                            <p class="d-inline">Email : <span style="color: blue;">njimateaicha@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-gray-600">
                            <p class="d-inline-block me-2 mb-0">Suivez moi :</p>
                            <a href="https://www.linkedin.com/" class="text-blue-500 hover:text-blue-700 d-inline-block"
                                target="_blank">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    {{--  <script>
        window.watsonAssistantChatOptions = {
          integrationID: "49560a46-f018-4c49-8a83-d069b96fc72b", // The ID of this integration.
          region: "au-syd", // The region your integration is hosted in.
          serviceInstanceID: "493a2bdb-b4a9-4c8b-a004-17e8e85d6536", // The ID of your service instance.
          onLoad: async (instance) => { await instance.render(); }
        };
        setTimeout(function(){
          const t=document.createElement('script');
          t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
          document.head.appendChild(t);
        });
      </script>  --}}
</body>

</html>
