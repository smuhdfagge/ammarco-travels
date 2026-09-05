@extends('layouts.app')

@section('title', 'Flight Booking')
@section('meta_description', 'Search and enquire about domestic and international flights with Ammarco Travels — one-way, round-trip or multi-city.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Flights</div>
            <h1>Flight Booking</h1>
            <p>Tell us your travel plans and a consultant will send you the best available fares. Live fare search is coming soon — every enquiry below is reviewed by a real person.</p>
        </div>
    </section>

    <section class="section container">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-error"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif

        <div class="card" style="max-width: 780px; margin: 0 auto;">
            <form method="POST" action="{{ route('flights.enquire') }}">
                @csrf
                <div class="radio-group">
                    <label><input type="radio" name="trip_type" value="one_way" checked> One-way</label>
                    <label><input type="radio" name="trip_type" value="round_trip"> Round-trip</label>
                    <label><input type="radio" name="trip_type" value="multi_city"> Multi-city</label>
                </div>

                <div class="form-grid">
                    <div class="form-row">
                        <label for="departure">Departure</label>
                        <input type="text" id="departure" name="departure" value="{{ old('departure', request('from')) }}" placeholder="City or airport" required>
                    </div>
                    <div class="form-row">
                        <label for="destination">Destination</label>
                        <input type="text" id="destination" name="destination" value="{{ old('destination', request('to')) }}" placeholder="City or airport" required>
                    </div>
                    <div class="form-row">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" id="departure_date" name="departure_date" value="{{ old('departure_date', request('date')) }}" required>
                    </div>
                    <div class="form-row">
                        <label for="return_date">Return Date (if applicable)</label>
                        <input type="date" id="return_date" name="return_date" value="{{ old('return_date') }}">
                    </div>
                    <div class="form-row">
                        <label for="passengers">Passengers</label>
                        <input type="number" id="passengers" name="passengers" min="1" max="20" value="{{ old('passengers', 1) }}" required>
                    </div>
                    <div class="form-row">
                        <label for="cabin_class">Cabin Class</label>
                        <select id="cabin_class" name="cabin_class" required>
                            <option value="Economy">Economy</option>
                            <option value="Premium Economy">Premium Economy</option>
                            <option value="Business">Business</option>
                            <option value="First">First</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label for="airline_preference">Airline Preference (optional)</label>
                    <input type="text" id="airline_preference" name="airline_preference" value="{{ old('airline_preference') }}" placeholder="e.g. Qatar Airways, Turkish Airlines">
                </div>

                <h3 style="margin-top:24px;">Your Contact Details</h3>
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

                <button type="submit" class="btn btn-primary btn-block">Search Flights</button>
            </form>
        </div>
    </section>
@endsection
