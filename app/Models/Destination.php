<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    protected $fillable = [
        'name', 'slug', 'region', 'hero_image', 'starting_price', 'best_time_to_visit',
        'currency', 'language', 'time_zone', 'short_description', 'overview',
        'top_attractions', 'things_to_do', 'weather_overview', 'visa_requirements',
        'transportation_info', 'accommodation_options', 'food_recommendations',
        'travel_tips', 'safety_information', 'estimated_budget', 'faqs', 'is_featured',
    ];

    protected $casts = [
        'top_attractions' => 'array',
        'things_to_do' => 'array',
        'faqs' => 'array',
        'is_featured' => 'boolean',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }
}
