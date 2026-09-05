@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Ammarco Travels — flights, hotels, holiday packages, visa assistance, tours and corporate travel. Plan your next journey with experienced consultants.')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-inner">
                <span class="hero-eyebrow">International Travel Consultants</span>
                <h1>Explore the world with Ammarco Travels</h1>
                <p>Flights, hotels, holiday packages, visa assistance and corporate travel — all handled with care, so your journey starts stress-free.</p>
                <div class="hero-ctas">
                    <a href="{{ route('quote') }}" class="btn btn-primary">Plan Your Trip</a>
                    <a href="{{ route('destinations.index') }}" class="btn btn-outline">Explore Destinations</a>
                </div>
            </div>

            <div class="trip-widget">
                <div class="trip-tabs" role="tablist" aria-label="Travel enquiry type">
                    <button class="trip-tab active" data-tab="flight" role="tab" aria-selected="true">Flight Booking</button>
                    <button class="trip-tab" data-tab="hotel" role="tab" aria-selected="false">Hotel Booking</button>
                    <button class="trip-tab" data-tab="package" role="tab" aria-selected="false">Holiday Packages</button>
                    <button class="trip-tab" data-tab="visa" role="tab" aria-selected="false">Visa Assistance</button>
                    <button class="trip-tab" data-tab="other" role="tab" aria-selected="false">More Services</button>
                </div>

                <div class="trip-panel active" data-panel="flight">
                    <form action="{{ route('flights') }}" method="get">
                        <div class="trip-fields">
                            <div>
                                <label>From</label>
                                <input type="text" name="from" placeholder="Departure city">
                            </div>
                            <div>
                                <label>To</label>
                                <input type="text" name="to" placeholder="Destination city">
                            </div>
                            <div>
                                <label>Departure</label>
                                <input type="date" name="date">
                            </div>
                            <div>
                                <label>Passengers</label>
                                <select name="passengers"><option>1</option><option>2</option><option>3</option><option>4+</option></select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Search Flights</button>
                    </form>
                </div>

                <div class="trip-panel" data-panel="hotel">
                    <form action="{{ route('hotels') }}" method="get">
                        <div class="trip-fields">
                            <div>
                                <label>Destination</label>
                                <input type="text" name="destination" placeholder="City or hotel">
                            </div>
                            <div>
                                <label>Check-in</label>
                                <input type="date" name="check_in">
                            </div>
                            <div>
                                <label>Check-out</label>
                                <input type="date" name="check_out">
                            </div>
                            <div>
                                <label>Guests</label>
                                <select name="guests"><option>1</option><option>2</option><option>3</option><option>4+</option></select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Search Hotels</button>
                    </form>
                </div>

                <div class="trip-panel" data-panel="package">
                    <p style="margin: 0 0 16px; color: var(--muted); font-size: 14.5px;">Browse curated holiday packages by destination, budget or travel type.</p>
                    <a href="{{ route('packages.index') }}" class="btn btn-primary btn-block">Browse Holiday Packages</a>
                </div>

                <div class="trip-panel" data-panel="visa">
                    <p style="margin: 0 0 16px; color: var(--muted); font-size: 14.5px;">Get guidance on visa types, documentation and processing for your destination.</p>
                    <a href="{{ route('visa') }}" class="btn btn-primary btn-block">Start Visa Assistance</a>
                </div>

                <div class="trip-panel" data-panel="other">
                    <div class="tag-list">
                        <a href="{{ route('tours') }}" class="tag-pill">Tours &amp; Excursions</a>
                        <a href="{{ route('corporate') }}" class="tag-pill">Corporate Travel</a>
                        <a href="{{ route('packages.index') }}?category=Religious" class="tag-pill">Umrah/Hajj Travel</a>
                        <a href="{{ route('quote') }}" class="tag-pill">Airport Transfers</a>
                        <a href="{{ route('quote') }}" class="tag-pill">Travel Insurance</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section container">
        <div class="section-head">
            <h2 class="section-title">Popular destinations</h2>
            <p class="section-sub">Hand-picked destinations our consultants know well.</p>
        </div>
        <div class="grid grid-3">
            @forelse ($featuredDestinations as $destination)
                <a href="{{ route('destinations.show', $destination) }}" class="media-card" style="text-decoration:none;">
                    <div class="media-card-img">{{ $destination->region }}</div>
                    <div class="media-card-body">
                        <div class="media-card-meta">
                            <span>{{ $destination->best_time_to_visit }}</span>
                            <span class="price-tag">{{ $destination->starting_price }}</span>
                        </div>
                        <h3>{{ $destination->name }}</h3>
                        <p>{{ $destination->short_description }}</p>
                        <span class="btn btn-outline-navy btn-sm" style="margin-top:12px; align-self:flex-start;">Explore Destination</span>
                    </div>
                </a>
            @empty
                <p>Destinations coming soon.</p>
            @endforelse
        </div>
    </section>

    <section class="section bg-sand">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">Featured travel packages</h2>
                <p class="section-sub">Complete itineraries with accommodation, transport and activities included.</p>
            </div>
            <div class="grid grid-3">
                @forelse ($featuredPackages as $package)
                    <div class="media-card">
                        <div class="media-card-img">{{ $package->category }}</div>
                        <div class="media-card-body">
                            <div class="media-card-meta">
                                <span>{{ $package->duration }}</span>
                                @if ($package->rating)
                                    <span>&#9733; {{ $package->rating }} ({{ $package->review_count }})</span>
                                @endif
                            </div>
                            <h3>{{ $package->title }}</h3>
                            <p>{{ $package->summary }}</p>
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:12px;">
                                <span class="price-tag">{{ $package->starting_price }}</span>
                                <a href="{{ route('packages.show', $package) }}" class="btn btn-outline-navy btn-sm">View Package</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Packages coming soon.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="section container">
        <div class="section-head">
            <h2 class="section-title">Why choose Ammarco Travels</h2>
        </div>
        <div class="grid grid-4">
            <div class="feature">
                <div class="feature-icon">&#10003;</div>
                <h3>Experienced Consultants</h3>
                <p>Our team has planned journeys for individuals, families and corporate clients across multiple destinations.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#8358;</div>
                <h3>Competitive Pricing</h3>
                <p>Strong partner relationships help us offer fair, transparent pricing on flights, hotels and packages.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#127760;</div>
                <h3>Global Network</h3>
                <p>Access to airlines, hotels and ground partners across multiple regions.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">24</div>
                <h3>Responsive Support</h3>
                <p>Our consultants are reachable by phone, email and WhatsApp before, during and after your trip.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#128179;</div>
                <h3>Visa Support</h3>
                <p>Guidance on documentation and application steps for a range of destinations.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#128274;</div>
                <h3>Secure Enquiries</h3>
                <p>Your information is handled securely from enquiry through to booking confirmation.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#128188;</div>
                <h3>Personalised Planning</h3>
                <p>Every itinerary can be tailored to your budget, interests and schedule.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">&#127970;</div>
                <h3>Corporate Travel</h3>
                <p>Dedicated support for company travel, conferences and group logistics.</p>
            </div>
        </div>
    </section>

    <section class="section bg-sand">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">Travel inspiration</h2>
                <p class="section-sub">Guides, tips and destination information to help you plan.</p>
            </div>
            <div class="grid grid-3">
                @forelse ($latestGuides as $guide)
                    <a href="{{ route('guides.show', $guide) }}" class="media-card" style="text-decoration:none;">
                        <div class="media-card-img">{{ $guide->category }}</div>
                        <div class="media-card-body">
                            <h3>{{ $guide->title }}</h3>
                            <p>{{ $guide->excerpt }}</p>
                            <span style="font-size:13px; color: var(--muted); margin-top:10px;">{{ $guide->read_time }}</span>
                        </div>
                    </a>
                @empty
                    <p>Guides coming soon.</p>
                @endforelse
            </div>
            <div class="center-cta">
                <a href="{{ route('guides.index') }}" class="btn btn-outline-navy">Browse All Travel Guides</a>
            </div>
        </div>
    </section>

    <section class="section container">
        <div class="section-head">
            <h2 class="section-title">What our travellers say</h2>
        </div>
        <div class="grid grid-3">
            @forelse ($testimonials as $t)
                <div class="testimonial-card">
                    <div class="testimonial-stars" aria-label="{{ $t->rating }} out of 5 stars">
                        {{ str_repeat('★', $t->rating) }}{{ str_repeat('☆', 5 - $t->rating) }}
                    </div>
                    <p class="testimonial-quote">&ldquo;{{ $t->review }}&rdquo;</p>
                    <div class="testimonial-person">
                        <div class="avatar-fallback">{{ strtoupper(substr($t->customer_name, 0, 1)) }}</div>
                        <div>
                            <div class="testimonial-name">{{ $t->customer_name }}</div>
                            <div class="testimonial-loc">{{ $t->location }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Customer reviews coming soon.</p>
            @endforelse
        </div>
    </section>

    <section class="section stats-band">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">Global reach</h2>
                <p class="section-sub">Placeholder figures below — to be replaced with verified company statistics.</p>
            </div>
            <div class="grid grid-3">
                <div><span class="stat-number">[Trips Booked]</span><span class="stat-label">Placeholder — pending confirmed figure</span></div>
                <div><span class="stat-number">[Destinations Served]</span><span class="stat-label">Placeholder — pending confirmed figure</span></div>
                <div><span class="stat-number">[Years of Experience]</span><span class="stat-label">Placeholder — pending confirmed figure</span></div>
            </div>
            <div class="region-pills">
                <span class="region-pill">Africa</span>
                <span class="region-pill">Middle East</span>
                <span class="region-pill">Europe</span>
                <span class="region-pill">Asia</span>
                <span class="region-pill">North America</span>
            </div>
        </div>
    </section>

    <section class="section cta-band">
        <div class="container">
            <h2>Where will your next journey take you?</h2>
            <p>Talk to our travel consultants today — no obligation, just clear options.</p>
            <div class="hero-ctas" style="justify-content:center;">
                <a href="{{ route('quote') }}" class="btn btn-light">Plan Your Trip</a>
                <a href="{{ route('contact') }}" class="btn btn-outline">Contact Our Travel Experts</a>
                <a href="{{ route('quote') }}" class="btn btn-outline">Request a Quote</a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('.trip-tab').forEach(function (tab) {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.trip-tab').forEach(function (t) { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
            document.querySelectorAll('.trip-panel').forEach(function (p) { p.classList.remove('active'); });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
            document.querySelector('.trip-panel[data-panel="' + this.dataset.tab + '"]').classList.add('active');
        });
    });
</script>
@endpush
