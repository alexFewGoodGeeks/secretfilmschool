@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full">
        <div class="video-heading">
            <video autoplay muted loop >
                <source src="{{ asset('images/video.ogv') }}" type="video/ogg">
            </video>
        </div>
        <div class="text-center heading-text-wrapper container">
            <div class="heading-text title-text col-md-8">
                <h1>discover the unique methodology of movie success</h1>
                <h2>Lorem ipsum dolor sit amet, consecetur adsipling sedi emunds imposing</h2>
            </div>
            <div class="heading-text cta-button col-md-4">

            </div>
        </div>
    </header>

    <section id="featured-section" class="featured-section-wrapper">
        <div class="container featured-section">
            <h2 class="d-flex justify-content-center">Featured on</h2>
            <div class="featured-section-logos d-flex justify-content-center">
                <div class="featured-logo logo">
                    <img src="{{ asset('images/bbc_logo.png') }}" alt="BBC logo" title="BBC logo" />
                </div>
                <div class="featured-logo logo">
                    <img src="{{ asset('images/the_guardian_logo.png') }}" alt="The Guardian logo" title="The Guardian logo" />
                </div>
                <div class="featured-logo logo">
                    <img src="{{ asset('images/rtl_logo.png') }}" alt="RTL logo" title="RTL logo" />
                </div>
                <div class="featured-logo logo">
                    <img src="{{ asset('images/rtl_logo.png') }}" alt="RTL logo" title="RTL logo" />
                </div>
            </div>
        </div>
    </section>

    <section id="inside-sfs" class="inside-sfs-wrapper">
            <div class="container">
                <div class="row">
                <div class="inside-sfs-text col-md-8">
                    <h2>inside secret film school</h2>
                    <p>Lorem ipsum amet dolor</p>
                </div>
                <div class="inside-sfs-btn col-md-4">
                    <div class="inside-sfs-content">
                        <p>ready to start?</p>
                        <p>Get full access and start today</p>
                        <a href="" class="sfs-btn sfs-btn-yellow">start now</a>
                    </div>
                </div>
                </div>
            </div>
    </section>


    <section id="sfs-modules" class="sfs-modules-wrapper">
        <div class="container">
        <ul class="nav " id="modules-nav">
            <li class="nav-item col-md-4">
                <a class="active nav-link module-one module-nav-item" data-toggle="tab" href="#home">
                    <span class="module-nav-title">Module One</span>
                    <span class="module-nav-subtitle">How to build your audience</span>
                </a>
            </li>
            <li class="nav-item col-md-4">
                <a class="nav-link module-two module-nav-item" data-toggle="tab" href="#menu1">
                    <span class="module-nav-title">Module Two</span>
                    <span class="module-nav-subtitle">How to win at film vestivals</span>
                </a>
            </li>
            <li class="nav-item col-md-4">
                <a class="nav-link module-three module-nav-item" data-toggle="tab" href="#menu2">
                    <span class="module-nav-title">Module Three</span>
                    <span class="module-nav-subtitle">How to find distribution</span>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active module-content"><br>
                <h3>MODULE ONE</h3>
                <h2>HOW TO BUILD YOUR AUDIENCE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div id="menu1" class="container tab-pane fade module-content"><br>
                <h3>MODULE TWO</h3>
                <h2>HOW TO WIN AT FILM FESTIVALS</h2>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="container tab-pane fade module-content"><br>
                <h3>MODULE THREE</h3>
                <h2>HOW TO FIND DISTRIBUTION</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 testimonial-item d-flex">
                    <div class="testimonial-avatar">
                        <img src="{{ asset('images/testimonial_1.png') }}" alt="" title="" />
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="testimonial-author">Jeanine Lex</p>
                    </div>
                </div>
                <div class="col-md-6 testimonial-item d-flex">
                    <div class="testimonial-avatar">
                        <img src="{{ asset('images/testimonial_2.png') }}" alt="" title="" />
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="testimonial-author">Jeanine Lex</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="faq" class="faq-wrapper">
        <div class="container faq-content">
            <h2>FAQ</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </section>



@endsection
