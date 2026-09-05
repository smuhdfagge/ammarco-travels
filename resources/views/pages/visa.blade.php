@extends('layouts.app')

@section('title', 'Visa Assistance')
@section('meta_description', 'Visa assistance from Ammarco Travels — guidance on visa types, required documents and the application process.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Visa Assistance</div>
            <h1>Visa Assistance</h1>
            <p>We guide you through documentation and the application process. We do not guarantee visa approval or specific outcomes — decisions rest solely with the relevant embassy or authority.</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-2">
            <div>
                <h2>Countries We Assist With</h2>
                <p>We currently provide guidance for common destinations including the UAE, Türkiye, Saudi Arabia (Umrah/Hajj), Schengen countries, and the United Kingdom. Coverage varies — confirm with our team for your specific destination.</p>

                <h2>Visa Types</h2>
                <ul class="check-list">
                    <li>Tourist / visit visas</li>
                    <li>Business visas</li>
                    <li>Pilgrimage visas (Umrah/Hajj)</li>
                    <li>Transit visas</li>
                </ul>
            </div>
            <div>
                <h2>Required Documents (Typical)</h2>
                <ul class="check-list">
                    <li>Valid passport (minimum 6 months validity, typically)</li>
                    <li>Passport photographs meeting embassy specifications</li>
                    <li>Proof of accommodation and travel itinerary</li>
                    <li>Bank statement or proof of funds</li>
                    <li>Additional documents as required per destination</li>
                </ul>
                <p style="font-size: 13.5px; color: var(--muted);">Exact requirements vary by country and change periodically — we confirm current requirements at the time of your application.</p>
            </div>
        </div>

        <div class="grid grid-2" style="margin-top: 20px;">
            <div class="card">
                <h3>Application Process</h3>
                <ol style="padding-left: 20px; color: var(--muted); font-size: 14.5px;">
                    <li>Submit an enquiry with your destination and travel dates</li>
                    <li>Our team confirms current requirements and documents needed</li>
                    <li>You submit your documents for review</li>
                    <li>We assist with the application submission</li>
                    <li>You're notified once a decision is available from the authority</li>
                </ol>
            </div>
            <div class="card">
                <h3>Processing Time & Fees</h3>
                <p style="color: var(--muted); font-size: 14.5px;">Processing times and service fees vary by destination and visa type, and are subject to embassy/consulate timelines outside our control. We'll confirm current estimates when you enquire.</p>
            </div>
        </div>

        <div class="section-head" style="margin-top: 50px;">
            <h2 class="section-title">Frequently asked questions</h2>
        </div>
        <div style="max-width:720px; margin:0 auto 40px;">
            <div class="faq-item">
                <p class="faq-q">Can you guarantee my visa will be approved?</p>
                <p class="faq-a">No. Visa decisions are made solely by the relevant embassy or consulate. We assist with documentation and guidance, not approval outcomes.</p>
            </div>
            <div class="faq-item">
                <p class="faq-q">How far in advance should I apply?</p>
                <p class="faq-a">We recommend starting the process at least 4–6 weeks before travel, though this varies by destination.</p>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success" style="max-width:720px; margin:0 auto 20px;">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-error" style="max-width:720px; margin:0 auto 20px;"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif

        <div class="card" style="max-width: 720px; margin: 0 auto;">
            <h3>Start Your Visa Enquiry</h3>
            <form method="POST" action="{{ route('visa.enquire') }}">
                @csrf
                <div class="form-grid">
                    <div class="form-row">
                        <label for="destination_country">Destination Country</label>
                        <input type="text" id="destination_country" name="destination_country" value="{{ old('destination_country') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="visa_type">Visa Type</label>
                        <input type="text" id="visa_type" name="visa_type" value="{{ old('visa_type') }}" placeholder="e.g. Tourist, Business, Umrah">
                    </div>
                    <div class="form-row">
                        <label for="travel_date">Intended Travel Date</label>
                        <input type="date" id="travel_date" name="travel_date" value="{{ old('travel_date') }}">
                    </div>
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
                <div class="form-row">
                    <label for="message">Additional Information</label>
                    <textarea id="message" name="message" rows="4">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit Visa Enquiry</button>
            </form>
        </div>
    </section>
@endsection
