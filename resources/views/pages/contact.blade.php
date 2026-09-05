@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Contact Ammarco Travels — reach our travel consultants by phone, email or the form below.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Contact</div>
            <h1>Contact Us</h1>
            <p>We'd love to help plan your next trip. Reach out below.</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-2">
            <div>
                <h2>Get in Touch</h2>
                <p>Fill out the form and one of our travel consultants will get back to you shortly.</p>
                <ul class="contact-details">
                    <li><strong>Address:</strong> Kano, Nigeria</li>
                    <li><strong>Email:</strong> info@ammarcotravels.com</li>
                    <li><strong>Phone:</strong> +234 800 000 0000</li>
                    <li><strong>WhatsApp:</strong> [Placeholder — pending number]</li>
                    <li><strong>Hours:</strong> Mon – Sat, 9:00am – 6:00pm</li>
                </ul>
                <p style="font-size: 13.5px; color: var(--muted);">For urgent travel support while abroad, please call our office directly.</p>
            </div>

            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="form-row">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-row">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="form-row">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}">
                    </div>
                    <div class="form-row">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>
@endsection
