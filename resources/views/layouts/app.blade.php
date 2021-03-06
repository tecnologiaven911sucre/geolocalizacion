<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Geolocalizacion') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Geolocalizacion') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <?php 
            function activeMenu($url){
                return request()->is($url) ? 'active': '';
            }
        ?>

        <main class="py-4">
            <div class="container-fluid login">
                <div class="row justify-content-center">
                        @if(auth()->check()) 
                        <nav class="col-md-3 d-none d-md-block navbar-dark bg-light sidebar">
                            <div class="sidebar-sticky">
                              <div class="list-group ">
                                  <a href="{{url('/')}}" class="list-group-item list-group-item-action list-group-item-primary {{activeMenu('/')}}">inicio</a>
                              <a href="{{ route('camaras.index')}}" class="list-group-item list-group-item-action list-group-item-primary {{activeMenu('camaras')}}">Camaras Ven9-1-1</a>
                              <a href="{{ route('cajas.index')}}" class="list-group-item list-group-item-action list-group-item-primary {{activeMenu('cajas')}}">Cajas </a>
                              <a href="{{ route('estados.index')}}" class="list-group-item list-group-item-action list-group-item-primary {{activeMenu('estados')}}">Estados</a>
                              <a href="{{ route('centrodecomando.index')}}" class="list-group-item list-group-item-action list-group-item-primary {{activeMenu('centrodecomando')}}">Centro de comando</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">COVID-19</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Opciones</a>
                                @if(auth()->user()->hasRoles(["admin"]))
                                <a href="{{ route('usuarios.index')}}" class="list-group-item list-group-item-action list-group-item-primary {{activeMenu('usuarios')}} ">Usuarios</a>
                                @endif

                              </div>
                            </div>
                          </nav>
                        @endif
                        @yield('content')
                    </div>  
            </div>
        </main>
    </div>
    <footer class="footer mt-auto py-3">
        <div class="container">
          <span>&copy; Todos los derechos reservados por el equipo de tecnologia del Ven911sucre</span>
        </div>
      </footer>
</body>
</html>
