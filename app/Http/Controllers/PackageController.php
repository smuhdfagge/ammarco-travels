<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PackageController extends Controller
{
    public function index(Request $request): View
    {
        $query = Package::query()->with('destination')->orderBy('title');

        if ($category = $request->get('category')) {
            $query->where('category', $category);
        }

        $packages = $query->get();
        $categories = ['Family', 'Honeymoon', 'Adventure', 'Luxury', 'Business', 'Religious', 'Group'];

        return view('packages.index', compact('packages', 'categories'));
    }

    public function show(Package $package): View
    {
        $package->load('destination');

        return view('packages.show', compact('package'));
    }
}
