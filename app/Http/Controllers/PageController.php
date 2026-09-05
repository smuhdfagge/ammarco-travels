<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\GuideArticle;
use App\Models\Package;
use App\Models\Testimonial;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $featuredDestinations = Destination::where('is_featured', true)->take(3)->get();
        $featuredPackages = Package::where('is_featured', true)->with('destination')->take(3)->get();
        $latestGuides = GuideArticle::orderByDesc('published_at')->take(3)->get();
        $testimonials = Testimonial::where('is_featured', true)->take(6)->get();

        return view('pages.home', compact('featuredDestinations', 'featuredPackages', 'latestGuides', 'testimonials'));
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function flights(): View
    {
        return view('pages.flights');
    }

    public function hotels(): View
    {
        return view('pages.hotels');
    }

    public function tours(): View
    {
        return view('pages.tours');
    }

    public function visa(): View
    {
        return view('pages.visa');
    }

    public function corporate(): View
    {
        return view('pages.corporate');
    }

    public function quote(): View
    {
        return view('pages.quote');
    }
}
