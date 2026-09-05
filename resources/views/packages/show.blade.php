@extends('layouts.app')

@section('title', $package->title)
@section('meta_description', Str::limit($package->summary, 150))

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Home</a> /
                <a href="{{ route('packages.index') }}">Holiday Packages</a> /
                {{ $package->title }}
            </div>
            <h1>{{ $package->title }}</h1>
            <p>{{ $package->summary }}</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-2">
            <div>
                @if ($package->itinerary)
                    <h2>Itinerary</h2>
                    @foreach ($package->itinerary as $day)
                        <div class="itinerary-item">
                            <div class="itinerary-day">Day {{ $day['day'] }}</div>
                            <div>
                                <h4>{{ $day['title'] }}</h4>
                                <p>{{ $day['details'] }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif

                @if ($package->activities)
                    <h2 style="margin-top:24px;">Activities</h2>
                    <ul class="check-list">
                        @foreach ($package->activities as $activity)
                            <li>{{ $activity }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($package->important_information)
                    <h2>Important Information</h2>
                    <p>{{ $package->important_information }}</p>
                @endif

                @if ($package->terms_and_conditions)
                    <h2>Terms &amp; Conditions</h2>
                    <p>{{ $package->terms_and_conditions }}</p>
                @endif

                @if ($package->faqs)
                    <h2>Frequently Asked Questions</h2>
                    @foreach ($package->faqs as $faq)
                        <div class="faq-item">
                            <p class="faq-q">{{ $faq['q'] }}</p>
                            <p class="faq-a">{{ $faq['a'] }}</p>
                        </div>
                    @endforeach
                @endif
            </div>

            <div>
                <div class="card" style="margin-bottom: 24px;">
                    <div class="media-card-meta" style="margin-bottom:12px;">
                        <span class="badge">{{ $package->category }}</span>
                        @if ($package->rating)
                            <span>&#9733; {{ $package->rating }} ({{ $package->review_count }} reviews)</span>
                        @endif
                    </div>
                    <p style="font-size:14px; color: var(--muted); margin-bottom: 4px;">Duration</p>
                    <p style="font-weight:600; margin-bottom:16px;">{{ $package->duration }}</p>
                    <p style="font-size:14px; color: var(--muted); margin-bottom: 4px;">Starting price</p>
                    <p class="price-tag" style="font-size: 22px; margin-bottom: 20px;">{{ $package->starting_price }}</p>
                    @if ($package->destination)
                        <p style="font-size:14px; color: var(--muted); margin-bottom: 16px;">Destination: <a href="{{ route('destinations.show', $package->destination) }}" style="color: var(--navy); font-weight:600;">{{ $package->destination->name }}</a></p>
                    @endif
                    <a href="{{ route('quote') }}" class="btn btn-primary btn-block">Enquire About This Package</a>
                </div>

                @if ($package->inclusions)
                    <div class="card" style="margin-bottom: 24px;">
                        <h3>What's Included</h3>
                        <ul class="check-list">
                            @foreach ($package->inclusions as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($package->exclusions)
                    <div class="card" style="margin-bottom: 24px;">
                        <h3>What's Excluded</h3>
                        <ul style="padding-left: 20px; color: var(--muted); font-size: 14.5px;">
                            @foreach ($package->exclusions as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($package->accommodation)
                    <div class="card" style="margin-bottom: 24px;">
                        <h3>Accommodation</h3>
                        <p style="font-size:14.5px; color: var(--muted);">{{ $package->accommodation }}</p>
                    </div>
                @endif

                @if ($package->transportation)
                    <div class="card">
                        <h3>Transportation</h3>
                        <p style="font-size:14.5px; color: var(--muted);">{{ $package->transportation }}</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
