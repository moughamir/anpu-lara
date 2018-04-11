<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="{{ asset('js/fa/fontawesome-all.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet"-->
</head>
<body>
    <div id="app" class="container-super">
        <header class="header d-flex flex-row justify-content-end align-items-center">
            <!-- Logo -->
            <div class="logo_container mr-auto">
                <div class="logo">
                    <a href="{{ url('/') }}" title="Anpu Design"><img src="{{ asset('storage/anpu.svg') }}" alt="Anpu Design Logo"/></a>
                </div>
            </div>
            <!-- Main Navigation -->
            <nav class="main_nav justify-self-end">
                <ul class="nav_items">
                    <li class="active"><a href="{{ url('/') }}"><span>Home</span></a></li>
                    <li><a href="{{ url('/blog') }}"><span>Blog</span></a></li>
                    <li><a href="{{ url('/tutorials') }}"><span>Tutorials</span></a></li>
                    <li><a href="{{ url('/gallery') }}"><span>Gallery</span></a></li>
                    <li><a href="{{ url('/about') }}"><span>About</span></a></li>
                    <li><a href="{{ url('/about') }}"><span><i class="fas fa-search fa-2x"></i></span></a></li>
                </ul>
            </nav>
            <!-- Hamburger -->
            <div class="hamburger_container">
                <span class="hamburger_text">Menu</span>
                <span class="hamburger_icon"></span>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
