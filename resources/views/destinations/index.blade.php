@extends('layouts.app')

@section('title', 'Destinations')
@section('meta_description', 'Explore destinations across Africa, the Middle East, Europe, Asia and beyond with Ammarco Travels.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Destinations</div>
            <h1>Destinations</h1>
            <p>Browse destinations by region, each with practical travel information to help you plan.</p>
        </div>
    </section>

    <section class="section container">
        <div class="filter-bar">
            <a href="{{ route('destinations.index') }}" class="tag-pill {{ request('region') ? '' : 'active' }}">All Regions</a>
            @foreach ($regions as $region)
                <a href="{{ route('destinations.index', ['region' => $region]) }}" class="tag-pill {{ request('region') === $region ? 'active' : '' }}">{{ $region }}</a>
            @endforeach
        </div>

        <div class="grid grid-3">
            @forelse ($destinations as $destination)
                <a href="{{ route('destinations.show', $destination) }}" class="media-card" style="text-decoration:none;">
                    <div class="media-card-img">{{ $destination->region }}</div>
                    <div class="media-card-body">
                        <div class="media-card-meta">
                            <span>{{ $destination->best_time_to_visit }}</span>
                            <span class="price-tag">{{ $destination->starting_price }}</span>
                        </div>
                        <h3>{{ $destination->name }}</h3>
                        <p>{{ $destination->short_description }}</p>
                        <span class="btn btn-outline-navy btn-sm" style="margin-top:12px; align-self:flex-start;">Explore Destination</span>
                    </div>
                </a>
            @empty
                <p>No destinations found for this region yet. More are being added regularly.</p>
            @endforelse
        </div>
    </section>
@endsection
