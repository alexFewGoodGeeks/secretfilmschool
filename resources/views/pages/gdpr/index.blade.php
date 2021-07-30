@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    @include('pages.gdpr.header')

    <section class="blog-container gdpr-section">
        <div class="container">
            <h2>Cookie policy</h2>
            <p class="regular-text">
                To make this site work properly, we may place small data files called cookies on your device.
            </p>
            <br/>
            <h2>What are cookies?</h2>
            <p class="regular-text">
                A cookie is a small text file that a website saves on your computer
                or mobile device when you visit the site. It enables the website to
                remember your actions and preferences (such as login, language,
                font size and other display preferences) over a period of time, so
                you don’t have to keep re-entering them whenever you come back
                to the site or browse from one page to another.
            </p>

            <br/>
            <h2>What cookies are set by visiting our site?</h2>
            <p class="regular-text">
                <strong>Social website cookies</strong><br/>
                So you can easily “Like” or share our content on the likes of
                Facebook and Twitter we have included sharing buttons on our
                site. The privacy implications on this will vary from social network
                to social network and will be dependent on the privacy settings you
                have chosen on these networks.
            </p>
            <p class="regular-text">
                <strong>Visitor statistics cookies</strong><br/>
                We use cookies to compile visitor statistics such as how many
                people have visited our website, what type of technology they are
                using, how long they spend on the site, what page they look at etc
                using tools such as Google Analytics to help us continuously
                improve our website. These programs also tell us if how people
                reached this site (e.g. from a search engine) and whether they have
                been here before helping us to put more money into developing our
                services for you instead of marketing spend. These cookies do not
                collect or store personal information about you. Analytics data
                cannot be used to identify you.
            </p>
            <p class="regular-text">
                <strong>Remarketing cookies</strong><br/>
                You may notice that sometimes after visiting a site you see
                increased numbers of adverts from the site you visited. This is
                because advertisers, including ourselves pay for these adverts. The
                technology to do this is made possible by cookies and as such we
                may place a so called “remarketing cookie” during your visit. We
                use these adverts to offer special offers etc to encourage you to
                come back to our site. Don't worry we are unable to proactively
                reach out to you as the whole process is entirely anonymised. You
                can opt out of these cookies at any time.
            </p>

            <p class="regular-text">
                <strong>Affiliate cookies</strong><br/>
                We have a number of partners who promote our service on a
                success-only basis (i.e. instead of paying for advertising, we pay
                them commissions on sales). Cookies are required to allow us to
                reward these partners and these cookies are usually provided by
                specialist companies (known as affiliate networks). Neither us, the
                networks, or the partner advertising or recommending our services
                are able to identify you personally. We ask you to support us by
                allowing these cookies which ultimately help us to offer you the
                service we do at the price we do.
            </p>

            <p class="regular-text">
                <strong>Email newsletter cookies</strong><br/>
                This site offers newsletter or email subscription services and
                cookies may be used to remember if you are already registered and
                whether to show certain notifications which might only be valid to
                subscribed/unsubscribed users.
            </p>

            <p class="regular-text">
                <strong>Cookies - your choice</strong><br/>
                Our website works better with cookies enabled. Our cookies don’t
                give us or anyone else your personal data. We strongly advise you
                keep cookies enabled when you use our site.
            </p>

            <p class="regular-text">
                <strong>How to control cookies?</strong><br/>
                You can control and/or delete cookies as you wish – for details, see
                aboutcookies.org. You can delete all cookies that are already on
                your computer and you can set most browsers to prevent them
                from being placed. If you do this, however, you may have to
                manually adjust some preferences every time you visit a site and
                some services and functionalities may not work.
            </p>
        </div>
    </section>


    @include('pages.includes.footer')

@endsection
