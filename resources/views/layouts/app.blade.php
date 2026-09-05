<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ammarco Travels') | Ammarco Travels</title>
    <meta name="description" content="@yield('meta_description', 'Ammarco Travels — flights, hotels, holiday packages, visa assistance and corporate travel, planned by experienced consultants.')">
    <meta property="og:title" content="@yield('title', 'Ammarco Travels')">
    <meta property="og:description" content="@yield('meta_description', 'Flights, hotels, holiday packages, visa assistance and corporate travel — planned with care.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TravelAgency",
        "name": "Ammarco Travels",
        "url": "{{ url('/') }}",
        "areaServed": "Worldwide",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Kano",
            "addressCountry": "NG"
        }
    }
    </script>
    @stack('schema')
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <header class="site-header">
        <div class="container header-inner">
            <a href="{{ route('home') }}" class="brand">Ammarco <span>Travels</span></a>

            <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="mainNav">Menu</button>

            <nav class="main-nav" id="mainNav">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('flights') }}" class="{{ request()->routeIs('flights') ? 'active' : '' }}">Flights</a>
                <a href="{{ route('hotels') }}" class="{{ request()->routeIs('hotels') ? 'active' : '' }}">Hotels</a>
                <a href="{{ route('packages.index') }}" class="{{ request()->routeIs('packages.*') ? 'active' : '' }}">Holiday Packages</a>
                <a href="{{ route('destinations.index') }}" class="{{ request()->routeIs('destinations.*') ? 'active' : '' }}">Destinations</a>
                <a href="{{ route('tours') }}" class="{{ request()->routeIs('tours') ? 'active' : '' }}">Tours</a>
                <a href="{{ route('visa') }}" class="{{ request()->routeIs('visa') ? 'active' : '' }}">Visa Assistance</a>
                <a href="{{ route('corporate') }}" class="{{ request()->routeIs('corporate') ? 'active' : '' }}">Corporate Travel</a>
                <a href="{{ route('guides.index') }}" class="{{ request()->routeIs('guides.*') ? 'active' : '' }}">Travel Guides</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                <a href="{{ route('quote') }}" class="nav-cta">Plan Your Trip</a>
            </nav>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <div>
                <p class="brand" style="margin-bottom:8px;">Ammarco <span>Travels</span></p>
                <p>Your journey, planned with care — flights, hotels, packages, visas and corporate travel support.</p>
                <form class="newsletter-form" action="#" method="get" onsubmit="return false;">
                    <label for="newsletter-email" class="sr-only" style="position:absolute;left:-9999px;">Email address</label>
                    <input type="email" id="newsletter-email" placeholder="Your email address" aria-label="Email address for newsletter">
                    <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
                </form>
            </div>
            <div>
                <h4>Company</h4>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('guides.index') }}">Travel Guides</a>
            </div>
            <div>
                <h4>Services</h4>
                <a href="{{ route('flights') }}">Flights</a>
                <a href="{{ route('hotels') }}">Hotels</a>
                <a href="{{ route('packages.index') }}">Holiday Packages</a>
                <a href="{{ route('visa') }}">Visa Assistance</a>
                <a href="{{ route('corporate') }}">Corporate Travel</a>
                <a href="{{ route('destinations.index') }}">Destinations</a>
            </div>
            <div>
                <h4>Get in Touch</h4>
                <p>Kano, Nigeria</p>
                <p>info@ammarcotravels.com</p>
                <p>+234 800 000 0000</p>
            </div>
        </div>
        <div class="container copyright">
            &copy; {{ date('Y') }} Ammarco Travels. All rights reserved. &middot;
            <span style="opacity:0.8;">Terms &amp; Conditions and Privacy Policy — placeholders pending legal review.</span>
        </div>
    </footer>

    <div class="mobile-sticky-cta">
        <a href="{{ route('quote') }}">Plan My Trip</a>
    </div>

    <script>
        document.getElementById('navToggle').addEventListener('click', function () {
            var nav = document.getElementById('mainNav');
            var open = nav.classList.toggle('open');
            this.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    </script>
    @stack('scripts')
</body>
</html>
