<nav id="main-menu" class="">
    <div class="menu">
        <div class="menu-header">
            <a href="" id="closeMenu">
                <img class="hamburger-nav-close" src="{{ asset('images/close_menu.svg') }}" alt="site nav" title="Close menu" />
            </a>
        </div>
        <div class="menu-items">
            <ul class="right-menu">
                <li>
                    <a class="menu-item" data-to="main" href="{{ request()->is('blog*') || request()->is('article*') ? "/#main" : "#"}}">Home</a>
                </li>
                <li>
                    <a class="menu-item" data-to="sfs-modules" href="{{ request()->is('blog*') || request()->is('article*') ? "/#sfs-modules" : "#"}}">Modules</a>
                </li>
                <li>
                    <a class="menu-item" data-to="about-simon" href="{{ request()->is('blog*') || request()->is('article*') ? "/#about" : "#"}}">About</a>
                </li>
                <li>
                    <a class="menu-item" data-to="faq" href="{{ request()->is('blog*') || request()->is('article*') ? "/#faq" : "#"}}">FAQ</a>
                </li>
                <li>
                    <a class="menu-item"  href="/blog">BLOG</a>
                </li>
                <li>
                    <a class="menu-item"  href="/privacy-policy">PRIVACY POLICY</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
