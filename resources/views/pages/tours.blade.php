@extends('layouts.app')

@section('title', 'Tours & Excursions')
@section('meta_description', 'Guided tours and excursions arranged by Ammarco Travels, from city tours to desert safaris and cultural experiences.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Tours</div>
            <h1>Tours &amp; Excursions</h1>
            <p>Guided experiences you can add to any trip — from half-day city tours to full excursions.</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-3">
            <div class="card">
                <h3>City Sightseeing Tours</h3>
                <p>Half or full-day guided tours covering a destination's key landmarks, with a knowledgeable local guide.</p>
            </div>
            <div class="card">
                <h3>Desert Safaris</h3>
                <p>Dune bashing, camel rides and desert camp dinners — a popular add-on for Middle East itineraries.</p>
            </div>
            <div class="card">
                <h3>Cultural & Heritage Tours</h3>
                <p>Visits to historic quarters, museums and religious sites, guided with context and care.</p>
            </div>
            <div class="card">
                <h3>Cruise & Boat Excursions</h3>
                <p>River, strait or coastal cruises — from sunset Bosphorus cruises to Dubai Creek abra rides.</p>
            </div>
            <div class="card">
                <h3>Adventure Excursions</h3>
                <p>Hiking, water sports and outdoor activities available at select destinations.</p>
            </div>
            <div class="card">
                <h3>Custom Group Tours</h3>
                <p>Tell us your group size and interests and we'll put together a tailored excursion plan.</p>
            </div>
        </div>
        <div class="center-cta">
            <a href="{{ route('quote') }}" class="btn btn-primary">Enquire About a Tour</a>
        </div>
    </section>
@endsection
