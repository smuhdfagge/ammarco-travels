@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <p>Everything you need for a smooth, well-planned trip.</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-2">
            <div class="card">
                <h3>Flight Booking</h3>
                <p>Domestic and international flight bookings at competitive rates, with support for changes and rebooking.</p>
            </div>
            <div class="card">
                <h3>Visa Assistance</h3>
                <p>Guidance on documentation and application processes for tourist, business, and pilgrimage visas.</p>
            </div>
            <div class="card">
                <h3>Tour & Holiday Packages</h3>
                <p>Curated packages for individuals, families and groups, including accommodation and local transport.</p>
            </div>
            <div class="card">
                <h3>Hotel Reservations</h3>
                <p>Reservations at trusted hotels worldwide, matched to your budget and preferences.</p>
            </div>
            <div class="card">
                <h3>Pilgrimage Packages (Umrah & Hajj)</h3>
                <p>End-to-end arrangements for pilgrimage travel, including flights, accommodation and logistics.</p>
            </div>
            <div class="card">
                <h3>Corporate Travel Management</h3>
                <p>Reliable travel arrangements for businesses, with dedicated support for teams and executives.</p>
            </div>
        </div>

        <div class="center-cta">
            <a href="{{ route('contact') }}" class="btn btn-primary">Request a Quote</a>
        </div>
    </section>
@endsection
