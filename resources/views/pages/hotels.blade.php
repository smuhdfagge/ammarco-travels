@extends('layouts.app')

@section('title', 'Hotel Booking')
@section('meta_description', 'Find and enquire about hotels worldwide with Ammarco Travels, matched to your budget, dates and preferences.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Hotels</div>
            <h1>Hotel Booking</h1>
            <p>Tell us where and when you're travelling, and we'll match you with hotels that fit your budget and preferences.</p>
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
            <form method="POST" action="{{ route('hotels.enquire') }}">
                @csrf
                <div class="form-grid">
                    <div class="form-row">
                        <label for="destination">Destination</label>
                        <input type="text" id="destination" name="destination" value="{{ old('destination', request('destination')) }}" placeholder="City or hotel name" required>
                    </div>
                    <div class="form-row">
                        <label for="hotel_category">Hotel Category</label>
                        <select id="hotel_category" name="hotel_category">
                            <option value="">No preference</option>
                            <option value="Budget">Budget</option>
                            <option value="3-Star">3-Star</option>
                            <option value="4-Star">4-Star</option>
                            <option value="5-Star / Luxury">5-Star / Luxury</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="check_in">Check-in</label>
                        <input type="date" id="check_in" name="check_in" value="{{ old('check_in', request('check_in')) }}" required>
                    </div>
                    <div class="form-row">
                        <label for="check_out">Check-out</label>
                        <input type="date" id="check_out" name="check_out" value="{{ old('check_out', request('check_out')) }}" required>
                    </div>
                    <div class="form-row">
                        <label for="guests">Guests</label>
                        <input type="number" id="guests" name="guests" min="1" max="20" value="{{ old('guests', 1) }}" required>
                    </div>
                    <div class="form-row">
                        <label for="rooms">Rooms</label>
                        <input type="number" id="rooms" name="rooms" min="1" max="10" value="{{ old('rooms', 1) }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="price_range">Price Range (optional)</label>
                    <input type="text" id="price_range" name="price_range" value="{{ old('price_range') }}" placeholder="e.g. ₦50,000 – ₦100,000 per night">
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

                <button type="submit" class="btn btn-primary btn-block">Search Hotels</button>
            </form>
        </div>
    </section>
@endsection
