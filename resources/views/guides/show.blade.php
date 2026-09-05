@extends('layouts.app')

@section('title', $article->title)
@section('meta_description', Str::limit($article->excerpt, 150))

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="breadcrumbs">
                <a href="{{ route('home') }}">Home</a> /
                <a href="{{ route('guides.index') }}">Travel Guides</a> /
                {{ $article->title }}
            </div>
            <span class="badge">{{ $article->category }}</span>
            <h1 style="margin-top:12px;">{{ $article->title }}</h1>
            <p>{{ $article->read_time }} @if($article->published_at) &middot; {{ $article->published_at->format('F j, Y') }} @endif</p>
        </div>
    </section>

    <section class="section container">
        <div style="max-width: 720px; margin: 0 auto;">
            @foreach (explode("\n\n", $article->body) as $paragraph)
                <p style="margin-bottom: 18px; line-height: 1.75;">{!! nl2br(e($paragraph)) !!}</p>
            @endforeach
        </div>

        @if ($related->isNotEmpty())
            <div class="section-head" style="margin-top: 50px;">
                <h2 class="section-title">Related guides</h2>
            </div>
            <div class="grid grid-3">
                @foreach ($related as $item)
                    <a href="{{ route('guides.show', $item) }}" class="media-card" style="text-decoration:none;">
                        <div class="media-card-img">{{ $item->category }}</div>
                        <div class="media-card-body">
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->excerpt }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </section>
@endsection

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $article->title }}",
    "description": "{{ Str::limit(strip_tags($article->excerpt), 200) }}"
}
</script>
@endpush
