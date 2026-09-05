@extends('layouts.app')

@section('title', 'Holiday Packages')
@section('meta_description', 'Browse holiday packages by destination, budget, duration and travel type with Ammarco Travels.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Holiday Packages</div>
            <h1>Holiday Packages</h1>
            <p>Complete itineraries with accommodation, transport and activities included.</p>
        </div>
    </section>

    <section class="section container">
        <div class="filter-bar">
            <a href="{{ route('packages.index') }}" class="tag-pill {{ request('category') ? '' : 'active' }}">All Types</a>
            @foreach ($categories as $category)
                <a href="{{ route('packages.index', ['category' => $category]) }}" class="tag-pill {{ request('category') === $category ? 'active' : '' }}">{{ $category }}</a>
            @endforeach
        </div>

        <div class="grid grid-3">
            @forelse ($packages as $package)
                <div class="media-card">
                    <div class="media-card-img">{{ $package->category }}</div>
                    <div class="media-card-body">
                        <div class="media-card-meta">
                            <span>{{ $package->duration }}</span>
                            @if ($package->rating)
                                <span>&#9733; {{ $package->rating }} ({{ $package->review_count }})</span>
                            @endif
                        </div>
                        <h3>{{ $package->title }}</h3>
                        <p>{{ $package->summary }}</p>
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:12px;">
                            <span class="price-tag">{{ $package->starting_price }}</span>
                            <a href="{{ route('packages.show', $package) }}" class="btn btn-outline-navy btn-sm">View Package</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No packages found in this category yet.</p>
            @endforelse
        </div>
    </section>
@endsection
