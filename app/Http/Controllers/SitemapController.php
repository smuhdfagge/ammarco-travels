<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\GuideArticle;
use App\Models\Package;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $staticRoutes = [
            route('home'), route('about'), route('contact'), route('flights'),
            route('hotels'), route('tours'), route('visa'), route('corporate'),
            route('quote'), route('destinations.index'), route('packages.index'), route('guides.index'),
        ];

        $destinationRoutes = Destination::all()->map(fn ($d) => route('destinations.show', $d));
        $packageRoutes = Package::all()->map(fn ($p) => route('packages.show', $p));
        $guideRoutes = GuideArticle::all()->map(fn ($g) => route('guides.show', $g));

        $urls = collect($staticRoutes)
            ->merge($destinationRoutes)
            ->merge($packageRoutes)
            ->merge($guideRoutes);

        $xml = view('sitemap', compact('urls'))->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
