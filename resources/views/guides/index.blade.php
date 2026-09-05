@extends('layouts.app')

@section('title', 'Travel Guides')
@section('meta_description', 'Destination guides, visa tips, budget travel advice and more from Ammarco Travels.')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs"><a href="{{ route('home') }}">Home</a> / Travel Guides</div>
            <h1>Travel Guides</h1>
            <p>Practical articles to help you plan — destination tips, visa guidance, budgeting and more.</p>
        </div>
    </section>

    <section class="section container">
        <div class="filter-bar">
            <a href="{{ route('guides.index') }}" class="tag-pill {{ request('category') ? '' : 'active' }}">All Categories</a>
            @foreach ($categories as $category)
                <a href="{{ route('guides.index', ['category' => $category]) }}" class="tag-pill {{ request('category') === $category ? 'active' : '' }}">{{ $category }}</a>
            @endforeach
        </div>

        <div class="grid grid-3">
            @forelse ($articles as $article)
                <a href="{{ route('guides.show', $article) }}" class="media-card" style="text-decoration:none;">
                    <div class="media-card-img">{{ $article->category }}</div>
                    <div class="media-card-body">
                        <h3>{{ $article->title }}</h3>
                        <p>{{ $article->excerpt }}</p>
                        <span style="font-size:13px; color: var(--muted); margin-top:10px;">{{ $article->read_time }}</span>
                    </div>
                </a>
            @empty
                <p>No articles found in this category yet.</p>
            @endforelse
        </div>
    </section>
@endsection
