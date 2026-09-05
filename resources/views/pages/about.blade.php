@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Learn about Ammarco Travels — our story, mission and values as international travel consultants.')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>About Ammarco Travels</h1>
            <p>Getting to know the team behind your journeys.</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-2">
            <div>
                <h2>Our Story</h2>
                <p>Ammarco Travels was founded with a simple goal: make travel planning easy, transparent and reliable for every client, whether you're booking a business trip, a family holiday, or a pilgrimage.</p>
                <p>Over time we've built relationships with airline, hotel and visa partners, allowing us to offer dependable service to travellers across Nigeria and beyond.</p>
            </div>
            <div>
                <h2>Our Mission</h2>
                <p>To simplify travel for our clients by handling the details — bookings, documentation, logistics — so they can focus on the experience itself.</p>
                <h2>Our Values</h2>
                <ul class="check-list">
                    <li>Honesty and transparency in every booking</li>
                    <li>Attention to detail on every itinerary</li>
                    <li>Responsive, friendly customer support</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section stats-band">
        <div class="container">
            <p class="text-center" style="color: var(--muted); margin-bottom: 24px; font-size: 14px;">Placeholder figures below — to be replaced with verified company statistics.</p>
            <div class="grid grid-3">
                <div class="text-center"><span class="stat-number">[Trips Booked]</span><span class="stat-label">Placeholder</span></div>
                <div class="text-center"><span class="stat-number">[Happy Clients]</span><span class="stat-label">Placeholder</span></div>
                <div class="text-center"><span class="stat-number">[Partner Airlines]</span><span class="stat-label">Placeholder</span></div>
            </div>
        </div>
    </section>

    <section class="section container">
        <div class="section-head">
            <h2 class="section-title">Frequently asked questions</h2>
        </div>
        <div style="max-width:720px; margin:0 auto;">
            <div class="faq-item">
                <p class="faq-q">Is Ammarco Travels a licensed travel agency?</p>
                <p class="faq-a">Licensing and registration details will be published here once confirmed — placeholder pending business documentation.</p>
            </div>
            <div class="faq-item">
                <p class="faq-q">Which destinations do you cover?</p>
                <p class="faq-a">We arrange travel across Africa, the Middle East, Europe, Asia and beyond — see our Destinations directory for current coverage.</p>
            </div>
            <div class="faq-item">
                <p class="faq-q">How do I start planning a trip?</p>
                <p class="faq-a">Use the Request a Quote form or contact us directly, and a consultant will follow up with tailored options.</p>
            </div>
        </div>
    </section>
@endsection
