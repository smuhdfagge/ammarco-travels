@extends('layouts.app')

@section('title', 'Corporate Travel Management')
@section('meta_description', 'Corporate travel management from Ammarco Travels — flights, hotels, group travel and dedicated account support for businesses and organisations.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Corporate Travel</div>
            <h1>Corporate Travel Management</h1>
            <p>Reliable travel arrangements for companies, government organisations, NGOs and business travellers.</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-3">
            <div class="card"><h3>Corporate Flight Booking</h3><p>Managed flight bookings for staff, executives and travelling teams.</p></div>
            <div class="card"><h3>Hotel Arrangements</h3><p>Negotiated and managed hotel bookings for business trips and conferences.</p></div>
            <div class="card"><h3>Airport Transfers</h3><p>Reliable ground transport coordinated around your travellers' schedules.</p></div>
            <div class="card"><h3>Group & Conference Travel</h3><p>Coordinated logistics for teams attending conferences, trainings or events.</p></div>
            <div class="card"><h3>Visa Assistance</h3><p>Documentation support for business and official travel visas.</p></div>
            <div class="card"><h3>Dedicated Account Management</h3><p>A single point of contact for your organisation's ongoing travel needs.</p></div>
        </div>

        <div class="card" style="margin-top: 40px; max-width: 780px; margin-left:auto; margin-right:auto;">
            <h3>Request Corporate Travel Support</h3>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-error"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif
            <form method="POST" action="{{ route('corporate.enquire') }}">
                @csrf
                <div class="form-grid">
                    <div class="form-row">
                        <label for="company_name">Company / Organisation Name</label>
                        <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="company_size">Approximate Team Size</label>
                        <input type="text" id="company_size" name="company_size" value="{{ old('company_size') }}" placeholder="e.g. 1-10, 11-50, 50+">
                    </div>
                    <div class="form-row">
                        <label for="name">Contact Name</label>
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
                    <div class="form-row">
                        <label for="services_needed">Services Needed</label>
                        <input type="text" id="services_needed" name="services_needed" value="{{ old('services_needed') }}" placeholder="e.g. Flights, hotels, conference travel">
                    </div>
                </div>
                <div class="form-row">
                    <label for="message">Additional Details</label>
                    <textarea id="message" name="message" rows="4">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Request Corporate Travel Support</button>
            </form>
        </div>
    </section>
@endsection
