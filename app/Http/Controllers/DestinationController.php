<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DestinationController extends Controller
{
    public function index(Request $request): View
    {
        $query = Destination::query()->orderBy('name');

        if ($region = $request->get('region')) {
            $query->where('region', $region);
        }

        $destinations = $query->get();
        $regions = ['Africa', 'Middle East', 'Europe', 'Asia', 'North America', 'South America', 'Australia & Oceania'];

        return view('destinations.index', compact('destinations', 'regions'));
    }

    public function show(Destination $destination): View
    {
        $relatedPackages = $destination->packages()->latest()->take(3)->get();

        return view('destinations.show', compact('destination', 'relatedPackages'));
    }
}
