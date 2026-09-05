<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'customer_name', 'location', 'rating', 'review', 'avatar', 'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}
