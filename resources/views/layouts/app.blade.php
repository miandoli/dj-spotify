<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/spotify.js') }}" defer></script>
    <script src="{{ asset('js/join.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>
    <script src="{{ asset('js/party.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="bg-secondary" style="height: 10vh; width: 100%;">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <img src="/img/logo.png" class="img-fluid" alt="logo" style="width: 3rem;">
                <h1 class="text-light text-uppercase">DJ Spotify</h1>
            </div>
        </div>
        <div class="container-fluid bg-dark" style="height: 80vh;">
            @yield('content')
        </div>
        <div class="bg-secondary" style="height: 10vh; width: 100%;">
            <div class="d-flex justify-content-center align-items-center" style="height: 50%;">
                <p class="text-light m-0" style="font-size: 0.75rem;">Created by Matt Iandoli, Micheal Bosik, and Luke Trujillo</p>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="height: 50%;">
                <h4 class="text-light">HackWITus 2019</h4>
            </div>
        </div>
    </div>
</body>
</html>
