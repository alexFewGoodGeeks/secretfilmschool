<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>SecretFilmSchrool</title>

    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <title>{{ config('app.name', 'SecretFilmSchrool') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">

    </nav>
</header>

<main>

    @yield('content')

</main>

<footer class="container py-5">
    <div class="row">

    </div>
</footer>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
