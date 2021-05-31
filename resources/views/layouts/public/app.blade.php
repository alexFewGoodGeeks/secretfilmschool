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

<nav id="main-menu" class="">
    <div class="menu">
        <div class="menu-header">
            <a href="" id="closeMenu">
                <img class="hamburger-nav-close" src="{{ asset('images/hamburger.svg') }}" alt="site nav" title="Navigation" />
            </a>
        </div>
        <div class="menu-items">
            <ul class="right-menu">
                <li>
                    <a class="menu-item" data-to="main" href="#">Home</a>
                </li>
                <li>
                    <a class="menu-item" data-to="sfs-modules" href="#">Modules</a>
                </li>
                <li>
                    <a class="menu-item" data-to="about-simon" href="#">About</a>
                </li>
                <li>
                    <a class="menu-item" data-to="faq" href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="main" id="main">
        @yield('content')
    </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script>
    jQuery(function() {

        var videoPlayer = document.getElementById('promoVideo');

        $(".promo-image").click(function() {
            $(".promo-image").addClass("d-none")
            $(".promo-video").removeClass("d-none");
            videoPlayer.play();
        })

        $("#sidebarCollapse, .hamburger-nav").click(function() {
            $(this).hide();
            $(".main").addClass('inactive');
            $("#main-menu").addClass('active');
        })

        $("#closeMenu").click(function (e){
            e.preventDefault();
            $(".main").removeClass('inactive');
            $("#main-menu").removeClass('active');
            $("#sidebarCollapse, .hamburger-nav").show();
        })

        $(".menu-item").click(function() {
            var scrollTo = $(this).attr('data-to');

            $([document.documentElement, document.body]).animate({
                scrollTop: $("#" + scrollTo).offset().top
            }, 2000);
        });

        $(document).mouseup(function(e)
        {
            var container = $("#main-menu");

            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                $("#closeMenu").click();
            }
        });
    })
</script>

@yield('custom_js')

</body>
</html>
