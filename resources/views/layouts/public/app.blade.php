<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SecretFilmSchool</title>

    @include('pages.includes.seo_header')

    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <title>{{ config('app.name', 'SecretFilmSchool') }}</title>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    @include('pages.includes.menu')

    <div class="main" id="main">
        @yield('content')
    </div>

<!-- Scripts -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}" defer></script>

@yield('custom_js')

</body>
</html>
