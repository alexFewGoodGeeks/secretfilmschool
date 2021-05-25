<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SecretFilmSchool</title>

    @include('pages.includes.seo_header')

    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <title>{{ config('app.name', 'SecretFilmSchrool') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    @yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
