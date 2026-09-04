@extends('layouts.app')

@section('title', 'About Us')

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
                <p>Over the years we've built strong relationships with airlines, hotels and visa partners, allowing us to offer competitive rates and dependable service to travellers across Nigeria and beyond.</p>
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
        <div class="container grid grid-3">
            <div class="stat">
                <span class="stat-number">1000+</span>
                <span>Trips Booked</span>
            </div>
            <div class="stat">
                <span class="stat-number">500+</span>
                <span>Happy Clients</span>
            </div>
            <div class="stat">
                <span class="stat-number">10+</span>
                <span>Partner Airlines</span>
            </div>
        </div>
    </section>
@endsection
