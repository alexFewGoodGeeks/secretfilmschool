@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    <!-- Header - set the background image for the header in the line below-->
    <header class="bg-image-full">
        <div class="video-heading">
            <video autoplay muted loop >
                <source src="{{ asset('images/video.ogv') }}" type="video/ogg">
            </video>
        </div>
        <div class="text-center heading-text-wrapper container">
            <div class="row">
                <div class="col-md-8">
                    <div class="heading-text title-text ">
                        <h1>DISCOVER HOW TO BE A SUCCESSFUL FILMMAKER</h1>
                        <p class="small-heading">The proven system to take your career all the way.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading-text cta-button ">
                        <div class="cta-wrapper">
                            <button class="sfs-btn sfs-btn-yellow">GO TO FREE WEBINAR</button>
                            <p class="small-heading">SESSION BEGINS IN</p>
                            <p class="small-heading">00:23:16</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="header-headline" class="header-headline-wrapper">
        <div class="container">
            <div class="headline-text-content">
                <h2>90% OF INDEPENDENT FILMMAKERS FAIL WITH THEIR FIRST MOVIE.</h2>
                <h2>WHY? BECAUSE TALEN AND PASSION ONLY TAKE YOU SO FAR.</h2>
            </div>
        </div>
    </section>


    <section id="step-by-step-video" class="step-by-step-video-wrapper">
        <div class="container">
            <div class="sbs-content">
                <div class="sbs-title">
                    <h2>FOLLOW THIS SIMPLE STEP BY STEP PROGRAM</h2>
                    <h2>AND GET PAID TO MAKE THE FILMS YOU LOVE TO MAKE</h2>
                </div>
                <div class="sbs-video">

                    <img src="{{ asset('images/sbs-video.png') }}"  class="promo-image"/>
                    <video loop controls="controls" id="promoVideo" class="promo-video d-none">
                        <source src="{{ asset('images/video.mp4') }}" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section id="featured-section" class="featured-section-wrapper">
        <div class="container featured-section">
            <p class="d-flex justify-content-center small-heading">Simon’s work has featured here: </p>
            <div class="featured-section-logos d-flex justify-content-center">
                <div class="featured-logo logo">
                    <img src="{{ asset('images/amazon_logo.png') }}" alt="Amazon logo" title="Amazon logo" />
                </div>
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
                    <img src="{{ asset('images/the_times_logo.png') }}" alt="RTL logo" title="RTL logo" />
                </div>
                <div class="featured-logo logo">
                    <img src="{{ asset('images/channel9_logo.png') }}" alt="Channel9 logo" title="Channel9 logo" />
                </div>
            </div>
        </div>
    </section>

    <section id="inside-sfs" class="inside-sfs-wrapper">
            <div class="container">
                <div class="row">
                <div class="inside-sfs-text col-md-8">
                    <h2>GET INSIDE SECRET FILM SCHOOL</h2>
                    <p>This proven success system is composed of three training modules that
                        give you everything needed to guarantee the release of any indie film
                        regardless of your experience level.</p>
                </div>
                <div class="inside-sfs-btn col-md-4">
                    <div class="inside-sfs-content">
                        <p class="small-heading title"><strong>ready to start?</strong></p>
                        <p class="regular-text text">Get full access and start today</p>
                        <a href="{{ $settings->inside_sfs_link }}" target="_blank" class="sfs-btn sfs-btn-yellow">start now</a>
                    </div>
                </div>
                </div>
            </div>
    </section>


    <section id="sfs-modules" class="sfs-modules-wrapper">

        <div class="modules-nav-images">
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
                        <span class="module-nav-subtitle">How to win at film festivals</span>
                    </a>
                </li>
                <li class="nav-item col-md-4">
                    <a class="nav-link module-three module-nav-item" data-toggle="tab" href="#menu2">
                        <span class="module-nav-title">Module Three</span>
                        <span class="module-nav-subtitle">How to find distribution</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container">
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active module-content"><br>
                <h3 class="small-heading">MODULE ONE</h3>
                <h2>HOW TO BUILD YOUR AUDIENCE</h2>
                <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div id="menu1" class="container tab-pane fade module-content"><br>
                <h3 class="small-heading">MODULE TWO</h3>
                <h2>HOW TO WIN AT FILM FESTIVALS</h2>
                <p class="regular-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="container tab-pane fade module-content"><br>
                <h3 class="small-heading">MODULE THREE</h3>
                <h2>HOW TO FIND DISTRIBUTION</h2>
                <p class="regular-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
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
                        <p class="testimonial-text">This course is groundbreaking. All aspring filmmakers need this!                         </p>
                        <p class="testimonial-author">Charles Parish</p>
                        <p class="testimonial-author">Director</p>
                    </div>
                </div>
                <div class="col-md-6 testimonial-item d-flex">
                    <div class="testimonial-avatar">
                        <img src="{{ asset('images/testimonial_2.png') }}" alt="" title="" />
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">Within the first module I grew my audience by 8000%!                        </p>
                        <p class="testimonial-author">Jeanine Lex</p>
                        <p class="testimonial-author">Indie Filmmaker</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about-simon" class="about-simon-wrapper">
        <div class="container">
            <div class="one-to-one-wrapper">
                <div class="one-to-one-content">
                    <h2>ONE-TO-ONE PERSONAL COACHING</h2>
                    <p class="regular-text">Simon provides personal coaching to all filmmakers who
                        need one-to-one support with their productions to ensure
                        the best chance of success on any film release. If you want
                        Simon to help bring your film to a worldwide audience just
                        email your request to: hello@secretfilmschool.com
                    </p>
                    <p>
                        <a href="{{ $settings->free_scholarship_link }}" target="_blank" class="sfs-btn sfs-btn-yellow">APPLY FOR FREE SCHOLARSHIP!</a>
                    </p>
                </div>
                <div class="one-to-one-image">
                    <img src="{{ asset('images/1on1coaching.png') }}">
                </div>
            </div>
            <div class="about-simon-wrapper d-flex">
                <div class="about-image">
                    <img src="{{ asset('images/about_simon.jpg') }}" title="Simon Sharman" alt="Simon Sharman"/>
                </div>
                <div class="about-content">
                    <h2>ABOUT SIMON</h2>
                    <p>Independent filmmaker Simon Sharman singlehandedly took his
                        first indie feature to global audiences where it was accepted by
                        international film festivals before selling the title for international
                        distribution across multiple global streaming channels.</p>
                    <p>Before making his first movie Simon worked as a journalist for the
                        BBC, and has produced TV shows for channels in the US, Australia
                        and all across Europe.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq-wrapper">
        <div class="container faq-content">
            <h2>FAQ</h2>

            <p>
                <strong>How long does the program take to complete?</strong> The whole course is packaged into less than 5 hours of
                video training.
            </p>

            <p>
                <strong>Will the course give me everything I need to be successful with my film?</strong> Yes. This program gives you all
                the information you require to build an audience, win at film festivals and negotiate the best deal with a film
                distribution company.
            </p>

            <p>
                <strong>Is the course complicated?</strong> No. Secret Film School is easy to understand and has been completed by directors of all experience types including first time filmmakers.
            </p>

            <p>
                <strong>How does the program work?</strong> The course is made up of clearly presented step by step training videos which also includes specific ‘done for you’ / copy and paste sections to make your process as easy as possible.
            </p>

            <p>
                <strong>Is Secret Film School unique?</strong> The program is 100% the original creation of filmmaker Simon Sharman and the training inside cannot be found anywhere else in the industry.
            </p>

            <h2 class="faq-title">THERE’S A REASON YOU’RE HERE...</h2>

            <p>If you’re reading this page the chances are you’re an up and coming filmmaker who’s wondering how to make the final step to becoming a full time ceative professional who gets paid to do what you were put on this planet to do - make movies and sharing them with the world.</p>
            <p>However, when you don’t have access to inside industry contacts or a big budget to promote your first indie, it can be a tough and lonely career path filled with disappointent.  It’s understandable to be overwhelmed and feel that it might be too much of a challenge. We’ve all been there.</p>
            <p>It shouldn’t be so hard and all filmmakers deserve to have the same opportunity to fulfill their career ambitions regardless of where they live or who they know. If you have the talent and the passion then you deserve the same chances to succeed. The great news is there’s light at the end of the tunnel.</p>
            <p>THERE’S A WAY TO SUCCEED AND ANYONE CAN DO IT </p>
            <p>You see, it’s not who you that determines your chances of success anymore - its now what you know that counts most, as well as getting the right help from someone who has already worked out how to achieve it.</p>
            <p>By singlehandely taking his first indie feature film to global audiences, getting accepted into multiple film festivals and selling his title to an international film distribution company - with no prior knowledge or experience of how to do it - Secret Film School creator Simon Sharman achieved what over 90% of other first time filmmakers fail to do wirh their first film.</p>
            <p>That’s why Secret Film School has been created, so that any filmmaker can achieve massive success with their independent film even if they’ve never done it before.</p>

            <p>Here’s how it works:</p>
            <p>1) Enrol in one of the three membership options available.</p>
            <p>2) Work through each video training module and follow the step by step guide which you can use with any film production.</p>
            <p>3) Experience the fulfillment of becoming recognised in your field, becoming the successful filmmaker you know you can be and get paid to make the films you love to make.</p>
            <p>By enrolling in Secret Film School you’re making sure that you don’t become part of the 90% who fail with their first indie production and instead you set yourself on the path for the film career that you deserve. And by joining this program you’ll save yourself from years of struggle, and countless thousands of dollars you’d have otherwise lost.</p>
            <p>The Secret Film School program is incredible value for money and will be the best investment you make in yourself and your career because it will pay for itself a hundred times over. You’ll see just how valuable the course is even before you getto the end of the program and you’ll be amazed at how simple it is to complete.</p>
            <p>And at the end your reward is to become the full time filmmaker you’ve always dreamed you could be.</p>
        </div>
    </section>


    <footer id="footer" class="footer">
            <p>Footer</p>
    </footer>
@endsection


@section('custom_js')
    <script>

    </script>
@endsection
