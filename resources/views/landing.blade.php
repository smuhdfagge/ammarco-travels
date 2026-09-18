<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ammarco Travels offers trusted Hajj, Umrah, visa, flight and worldwide travel services from Kano, Nigeria.">
    <meta property="og:title" content="Ammarco Travels — Hajj, Umrah and Travel Services in Kano, Nigeria">
    <meta property="og:description" content="Travel farther with calm, capable guidance from Ammarco Travels.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <title>Ammarco Travels — Hajj, Umrah and Travel Services in Kano, Nigeria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ menuOpen: false }" @keydown.escape="menuOpen = false">
    @include('partials.header')
    <main>
        @include('partials.hero')
        @include('partials.contact-strip')
        @include('partials.about')
        @include('partials.services')
        @include('partials.why-us')
        @include('partials.cta')
        @include('partials.contact')
    </main>
    @include('partials.footer')
    <script>
        document.querySelectorAll('a[href^="#"]').forEach((link) => link.addEventListener('click', () => {
            window.Alpine && document.body.__x && null;
        }));
    </script>
</body>
</html>
