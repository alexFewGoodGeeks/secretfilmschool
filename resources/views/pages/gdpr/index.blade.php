@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    @include('pages.gdpr.header')

    <section class="blog-container gdpr-section">
        <div class="container">
            <p class="regular-text">
                To make Secret Film School page work properly, we sometimes place small data files called cookies on your device.
            </p>
            <h2>What are cookies?</h2>
            <p class="regular-text">
                A cookie is a small text file that a website stores on your computer or mobile device when you visit the site.

                <ul>
                    <li>
                        <p class="regular-text">First party cookies are cookies set by the website you’re visiting. Only that website can read them. In addition, a website might potentially use external services, which also set their own cookies, known as third-party cookies.</p>
                    </li>
                    <li>
                        <p class="regular-text">Persistent cookies are cookies saved on your computer and that are not deleted automatically when you quit your browser, unlike a session cookie, which is deleted when you quit your browser.</p>
                    </li>
                </ul>
            <p class="regular-text">
                Every time you visit the Secret Film School website, you will be prompted to accept cookies.

                The purpose is to enable the site to remember your preferences (such as user name, language, etc.) for a certain period of time.

                That way, you don’t have to re-enter them when browsing around the site during the same visit.

                Cookies can also be used to establish anonymised statistics about the browsing experience on our sites.
            </p>


            <h2>How do we use cookies</h2>
            <p class="regular-text">
                Secret Film School website mostly use “first-party cookies”. These are cookies set and controlled by the Secret Film School, not by any external organisation.

                However, to view some of our pages, you will have to accept cookies from external organisations.

                The 3 types of first-party cookie we use are to:

                <ul>
                    <li>
                        <p class="regular-text">store visitor preferences</p>
                    </li>
                    <li>
                        <p class="regular-text">make our websites operational</p>
                    </li>
                    <li>
                        <p class="regular-text">gather analytics data (about user behaviour)</p>
                    </li>
                    <li>
                        <p class="regular-text">Visitor preferences</p>
                    </li>
                </ul>

            <p class="regular-text">These are set by us and only we can read them. They remember:</p>

                <ul>
                    <li>
                        <p class="regular-text">if you have agreed to (or refused) this site’s cookie policy</p>
                    </li>
                    <li>
                        <p class="regular-text">if you have already replied to our survey pop-up (about how helpful the site content was) – so you won't be asked again</p>
                    </li>
                </ul>

            </p>

        </div>
    </section>


    @include('pages.includes.footer')

@endsection
