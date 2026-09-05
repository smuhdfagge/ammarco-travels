<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Package extends Model
{
    protected $fillable = [
        'destination_id', 'title', 'slug', 'category', 'hero_image', 'duration',
        'starting_price', 'rating', 'review_count', 'summary', 'itinerary',
        'inclusions', 'exclusions', 'accommodation', 'transportation', 'activities',
        'important_information', 'terms_and_conditions', 'faqs', 'is_featured',
    ];

    protected $casts = [
        'itinerary' => 'array',
        'inclusions' => 'array',
        'exclusions' => 'array',
        'activities' => 'array',
        'faqs' => 'array',
        'is_featured' => 'boolean',
        'rating' => 'float',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
}
