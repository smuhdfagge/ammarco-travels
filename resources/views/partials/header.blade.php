<header class="site-header" x-data="{ scrolled: false }" @scroll.window="scrolled = window.scrollY > 24" :class="{ 'is-scrolled': scrolled }">
    <div class="container header-inner">
        @include('partials.logo')
        <nav class="desktop-nav" aria-label="Primary navigation">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="#contact" class="button button-gold button-small">Book Now <span aria-hidden="true">↗</span></a>
        </nav>
        <button class="menu-toggle" type="button" aria-label="Toggle navigation" @click="menuOpen = !menuOpen" :aria-expanded="menuOpen.toString()">
            <span></span><span></span><span></span>
        </button>
    </div>
    <nav class="mobile-nav" x-show="menuOpen" x-transition @click.outside="menuOpen = false" aria-label="Mobile navigation">
        <a href="#home" @click="menuOpen = false">Home</a>
        <a href="#about" @click="menuOpen = false">About</a>
        <a href="#services" @click="menuOpen = false">Services</a>
        <a href="#contact" @click="menuOpen = false">Contact</a>
        <a href="#contact" class="button button-gold" @click="menuOpen = false">Book Now <span aria-hidden="true">↗</span></a>
    </nav>
</header>
