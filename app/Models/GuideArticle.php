<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuideArticle extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'cover_image', 'excerpt', 'body', 'read_time', 'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
