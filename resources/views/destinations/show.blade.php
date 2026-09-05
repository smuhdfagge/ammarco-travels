@extends('layouts.app')

@section('title', $destination->name)
@section('meta_description', Str::limit($destination->short_description, 150))

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Home</a> /
                <a href="{{ route('destinations.index') }}">Destinations</a> /
                {{ $destination->name }}
            </div>
            <h1>{{ $destination->name }}</h1>
            <p>{{ $destination->short_description }}</p>
        </div>
    </section>

    <section class="section container">
        <div class="grid grid-2">
            <div>
                <h2>Overview</h2>
                <p>{{ $destination->overview }}</p>

                @if ($destination->top_attractions)
                    <h2>Top Attractions</h2>
                    <ul class="check-list">
                        @foreach ($destination->top_attractions as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($destination->things_to_do)
                    <h2>Things to Do</h2>
                    <ul class="check-list">
                        @foreach ($destination->things_to_do as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($destination->weather_overview)
                    <h2>Weather</h2>
                    <p>{{ $destination->weather_overview }}</p>
                @endif

                @if ($destination->visa_requirements)
                    <h2>Visa Requirements</h2>
                    <p>{{ $destination->visa_requirements }}</p>
                @endif

                @if ($destination->safety_information)
                    <h2>Safety Information</h2>
                    <p>{{ $destination->safety_information }}</p>
                @endif
            </div>

            <div>
                <div class="card" style="margin-bottom: 24px;">
                    <h3>At a Glance</h3>
                    <table class="fact-table">
                        <tr><td>Region</td><td>{{ $destination->region }}</td></tr>
                        <tr><td>Best time to visit</td><td>{{ $destination->best_time_to_visit ?? '—' }}</td></tr>
                        <tr><td>Currency</td><td>{{ $destination->currency ?? '—' }}</td></tr>
                        <tr><td>Language</td><td>{{ $destination->language ?? '—' }}</td></tr>
                        <tr><td>Time zone</td><td>{{ $destination->time_zone ?? '—' }}</td></tr>
                        <tr><td>Estimated budget</td><td>{{ $destination->estimated_budget ?? '—' }}</td></tr>
                    </table>
                </div>

                @if ($destination->transportation_info)
                    <div class="card" style="margin-bottom: 24px;">
                        <h3>Getting Around</h3>
                        <p style="font-size:14.5px; color: var(--muted);">{{ $destination->transportation_info }}</p>
                    </div>
                @endif

                @if ($destination->accommodation_options)
                    <div class="card" style="margin-bottom: 24px;">
                        <h3>Accommodation</h3>
                        <p style="font-size:14.5px; color: var(--muted);">{{ $destination->accommodation_options }}</p>
                    </div>
                @endif

                @if ($destination->food_recommendations)
                    <div class="card" style="margin-bottom: 24px;">
                        <h3>Food to Try</h3>
                        <p style="font-size:14.5px; color: var(--muted);">{{ $destination->food_recommendations }}</p>
                    </div>
                @endif

                @if ($destination->travel_tips)
                    <div class="card">
                        <h3>Travel Tips</h3>
                        <p style="font-size:14.5px; color: var(--muted);">{{ $destination->travel_tips }}</p>
                    </div>
                @endif
            </div>
        </div>

        @if ($relatedPackages->isNotEmpty())
            <div class="section-head" style="margin-top: 50px;">
                <h2 class="section-title">Packages for {{ $destination->name }}</h2>
            </div>
            <div class="grid grid-3">
                @foreach ($relatedPackages as $package)
                    <div class="media-card">
                        <div class="media-card-img">{{ $package->category }}</div>
                        <div class="media-card-body">
                            <div class="media-card-meta"><span>{{ $package->duration }}</span></div>
                            <h3>{{ $package->title }}</h3>
                            <p>{{ $package->summary }}</p>
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:12px;">
                                <span class="price-tag">{{ $package->starting_price }}</span>
                                <a href="{{ route('packages.show', $package) }}" class="btn btn-outline-navy btn-sm">View Package</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        @if ($destination->faqs)
            <div class="section-head" style="margin-top: 50px;">
                <h2 class="section-title">Frequently asked questions</h2>
            </div>
            <div style="max-width:720px; margin:0 auto 20px;">
                @foreach ($destination->faqs as $faq)
                    <div class="faq-item">
                        <p class="faq-q">{{ $faq['q'] }}</p>
                        <p class="faq-a">{{ $faq['a'] }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="center-cta">
            <a href="{{ route('quote') }}" class="btn btn-primary">Plan a Trip to {{ $destination->name }}</a>
        </div>
    </section>
@endsection

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristDestination",
    "name": "{{ $destination->name }}",
    "description": "{{ Str::limit(strip_tags($destination->short_description), 200) }}"
}
</script>
@endpush
