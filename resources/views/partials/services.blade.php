<section id="services" class="section services-section reveal">
    <div class="container">
        <div class="section-heading"><div><p class="eyebrow"><span></span> What we do</p><h2>Everything you need,<br><em>beautifully handled.</em></h2></div><p class="section-intro">One capable team for the practical details and the precious moments in between.</p></div>
        <div class="services-grid">
            @php
                $services = [
                    ['01', 'Hajj and Umrah Visas', 'A clear, guided path through every pilgrimage requirement.', '✧'],
                    ['02', 'Flight Ticketing', 'Flexible routes and fares that fit your plans and budget.', '↗'],
                    ['03', 'Hotel Reservations', 'Comfortable stays selected for location, value and peace of mind.', '⌂'],
                    ['04', 'All Visa Categories', 'Practical support for business, study, tourism and more.', '▱'],
                    ['05', 'Travel Consultancy', 'Confident advice when the world feels full of possibilities.', '◎'],
                    ['06', 'General Contracts', 'Reliable travel logistics for organisations and teams.', '◇'],
                ];
            @endphp
            @foreach ($services as [$number, $title, $description, $icon])
                <article class="service-card"><div class="service-card-top"><span class="service-number">{{ $number }}</span><span class="service-icon" aria-hidden="true">{{ $icon }}</span></div><h3>{{ $title }}</h3><p>{{ $description }}</p><a href="#contact" aria-label="Ask about {{ $title }}">Learn more <span>↗</span></a></article>
            @endforeach
        </div>
    </div>
</section>
