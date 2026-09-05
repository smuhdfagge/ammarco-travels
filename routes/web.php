<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/flights', [PageController::class, 'flights'])->name('flights');
Route::post('/flights/enquire', [EnquiryController::class, 'storeFlight'])->name('flights.enquire');

Route::get('/hotels', [PageController::class, 'hotels'])->name('hotels');
Route::post('/hotels/enquire', [EnquiryController::class, 'storeHotel'])->name('hotels.enquire');

Route::get('/tours', [PageController::class, 'tours'])->name('tours');

Route::get('/visa-assistance', [PageController::class, 'visa'])->name('visa');
Route::post('/visa-assistance/enquire', [EnquiryController::class, 'storeVisa'])->name('visa.enquire');

Route::get('/corporate-travel', [PageController::class, 'corporate'])->name('corporate');
Route::post('/corporate-travel/enquire', [EnquiryController::class, 'storeCorporate'])->name('corporate.enquire');

Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('/destinations/{destination}', [DestinationController::class, 'show'])->name('destinations.show');

Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
Route::get('/packages/{package}', [PackageController::class, 'show'])->name('packages.show');

Route::get('/travel-guides', [GuideController::class, 'index'])->name('guides.index');
Route::get('/travel-guides/{guide}', [GuideController::class, 'show'])->name('guides.show');

Route::get('/request-a-quote', [PageController::class, 'quote'])->name('quote');
Route::post('/request-a-quote', [EnquiryController::class, 'storeQuote'])->name('quote.submit');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [EnquiryController::class, 'storeContact'])->name('contact.submit');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
