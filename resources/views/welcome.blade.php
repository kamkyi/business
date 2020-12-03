<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a class="navbar-brand" href="#">Anyar</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navb" class="navbar-collapse collapse hide">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Floral</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">E-Lucky</a>
                </li>
              </ul>

              <ul class="nav navbar-nav ml-auto">
                @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}"><span class="fas fa-user"></span> Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span> Login</a>
                </li>
                @endif
              </ul>
            </div>
          </nav>
    </body>
</html>
