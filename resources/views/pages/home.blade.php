@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="container hero-inner">
            <h1>Explore the World with Ammarco Travels</h1>
            <p>Flights, tours, hotel bookings and visa assistance — all handled with care, so your journey starts stress-free.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary">Plan Your Trip</a>
        </div>
    </section>

    <section class="section container">
        <h2 class="section-title">Why Travel With Us</h2>
        <div class="grid grid-3">
            <div class="card">
                <h3>Trusted Experience</h3>
                <p>Years of experience helping travellers plan smooth, reliable trips across the globe.</p>
            </div>
            <div class="card">
                <h3>Personalised Service</h3>
                <p>Every itinerary is tailored to your needs, budget, and travel goals.</p>
            </div>
            <div class="card">
                <h3>End-to-End Support</h3>
                <p>From booking to visa paperwork to landing, we're with you every step of the way.</p>
            </div>
        </div>
    </section>

    <section class="section container">
        <h2 class="section-title">What We Offer</h2>
        <div class="grid grid-3">
            <div class="card">
                <h3>Flight Booking</h3>
                <p>Competitive fares on domestic and international flights.</p>
            </div>
            <div class="card">
                <h3>Visa Assistance</h3>
                <p>Guidance and document support for visa applications.</p>
            </div>
            <div class="card">
                <h3>Tour Packages</h3>
                <p>Curated holiday and pilgrimage packages for individuals and groups.</p>
            </div>
        </div>
        <div class="center-cta">
            <a href="{{ route('services') }}" class="btn btn-outline">See All Services</a>
        </div>
    </section>

    <section class="section cta-band">
        <div class="container">
            <h2>Ready to plan your next trip?</h2>
            <p>Talk to our travel consultants today.</p>
            <a href="{{ route('contact') }}" class="btn btn-light">Contact Us</a>
        </div>
    </section>
@endsection
