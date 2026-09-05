@extends('layouts.app')

@section('title', 'Request a Quote')
@section('meta_description', 'Request a personalised travel quote from Ammarco Travels — tell us your trip details and a consultant will follow up within 24 hours.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Request a Quote</div>
            <h1>Request a Quote</h1>
            <p>Tell us about your trip and a travel consultant will reach out with tailored options — no obligation.</p>
        </div>
    </section>

    <section class="section container">
        @if (session('status'))
            <div class="alert alert-success" style="max-width:780px; margin:0 auto 20px;">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-error" style="max-width:780px; margin:0 auto 20px;"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif

        <div class="card" style="max-width: 780px; margin: 0 auto;">
            <form method="POST" action="{{ route('quote.submit') }}">
                @csrf
                <div class="form-grid">
                    <div class="form-row">
                        <label for="departure_location">Departure Location</label>
                        <input type="text" id="departure_location" name="departure_location" value="{{ old('departure_location') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="destination">Destination</label>
                        <input type="text" id="destination" name="destination" value="{{ old('destination') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="travel_dates">Travel Dates</label>
                        <input type="text" id="travel_dates" name="travel_dates" value="{{ old('travel_dates') }}" placeholder="e.g. 12–20 December 2026">
                    </div>
                    <div class="form-row">
                        <label for="travellers">Number of Travellers</label>
                        <input type="number" id="travellers" name="travellers" min="1" max="50" value="{{ old('travellers', 1) }}" required>
                    </div>
                    <div class="form-row">
                        <label for="travel_type">Travel Type</label>
                        <select id="travel_type" name="travel_type">
                            <option value="">Select one</option>
                            <option>Family</option>
                            <option>Honeymoon</option>
                            <option>Adventure</option>
                            <option>Luxury</option>
                            <option>Business</option>
                            <option>Religious travel</option>
                            <option>Group travel</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="accommodation_preference">Accommodation Preference</label>
                        <select id="accommodation_preference" name="accommodation_preference">
                            <option value="">No preference</option>
                            <option>Budget</option>
                            <option>Mid-range</option>
                            <option>Luxury</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="budget_range">Budget Range</label>
                        <input type="text" id="budget_range" name="budget_range" value="{{ old('budget_range') }}" placeholder="e.g. ₦800,000 – ₦1,200,000">
                    </div>
                </div>
                <div class="form-row">
                    <label for="message">Additional Requirements</label>
                    <textarea id="message" name="message" rows="4">{{ old('message') }}</textarea>
                </div>

                <h3 style="margin-top:8px;">Your Contact Details</h3>
                <div class="form-grid">
                    <div class="form-row">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Request a Quote</button>
            </form>
        </div>
    </section>
@endsection
