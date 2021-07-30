<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secret Film School</title>

    @include('pages.includes.seo_header')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <title>{{ config('app.name', 'SecretFilmSchool') }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/fav.png') }}"/>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="facebook-domain-verification" content="8fslmxhro29jrdiikh462jd2sy4we6" />
    <meta name="p:domain_verify" content="2129aafdf4a3769ce988ebfcf17448a1"/>

</head>
<body>

    @include('pages.includes.menu')

    <div class="main" id="main">
        @yield('content')

        @include('cookieConsent::index')

    </div>

<!-- Scripts -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.4.0/dist/lazyload.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

@yield('custom_js')


    <!-- Google Analytics -->
{{--    <script>--}}
{{--        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');--}}

{{--        ga('create', '{{ $settings->google_analytics }}', 'auto');--}}
{{--        ga('send', 'pageview');--}}
{{--    </script>--}}
    <!-- End Google Analytics -->

    <!-- Facebook Pixel Code -->
{{--    <script>--}}
{{--        !function(f,b,e,v,n,t,s)--}}
{{--        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?--}}
{{--            n.callMethod.apply(n,arguments):n.queue.push(arguments)};--}}
{{--            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';--}}
{{--            n.queue=[];t=b.createElement(e);t.async=!0;--}}
{{--            t.src=v;s=b.getElementsByTagName(e)[0];--}}
{{--            s.parentNode.insertBefore(t,s)}(window, document,'script',--}}
{{--            'https://connect.facebook.net/en_US/fbevents.js');--}}
{{--        fbq('init', '1237099536451822');--}}
{{--        fbq('track', 'PageView');--}}
{{--    </script>--}}
{{--    <noscript><img height="1" width="1" style="display:none"--}}
{{--                   src="https://www.facebook.com/tr?id=1237099536451822&ev=PageView&noscript=1"--}}
{{--        /></noscript>--}}
    <!-- End Facebook Pixel Code -->


</body>
</html>
