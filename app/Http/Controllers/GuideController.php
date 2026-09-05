<?php

namespace App\Http\Controllers;

use App\Models\GuideArticle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GuideController extends Controller
{
    public function index(Request $request): View
    {
        $query = GuideArticle::query()->orderByDesc('published_at');

        if ($category = $request->get('category')) {
            $query->where('category', $category);
        }

        $articles = $query->get();
        $categories = [
            'Destination Guides', 'Visa Guides', 'Flight Guides', 'Hotel Guides', 'Travel Tips',
            'Travel Safety', 'Airport Guides', 'Budget Travel', 'Luxury Travel', 'Family Travel',
            'Business Travel', 'Religious Travel', 'Seasonal Travel',
        ];

        return view('guides.index', compact('articles', 'categories'));
    }

    public function show(GuideArticle $guide): View
    {
        $related = GuideArticle::where('category', $guide->category)
            ->where('id', '!=', $guide->id)
            ->take(3)
            ->get();

        return view('guides.show', ['article' => $guide, 'related' => $related]);
    }
}
