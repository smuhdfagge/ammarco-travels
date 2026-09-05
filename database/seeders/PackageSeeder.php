<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $dubai = Destination::where('slug', 'dubai-uae')->first();
        $istanbul = Destination::where('slug', 'istanbul-turkiye')->first();
        $makkah = Destination::where('slug', 'makkah-madinah-saudi-arabia')->first();

        $packages = [
            [
                'destination_id' => $dubai?->id,
                'title' => 'Dubai Highlights — 5 Days',
                'slug' => 'dubai-highlights-5-days',
                'category' => 'Family',
                'duration' => '5 Days / 4 Nights',
                'starting_price' => '₦950,000 per person',
                'rating' => 4.7,
                'review_count' => 32,
                'summary' => 'A well-paced introduction to Dubai covering its iconic landmarks, desert adventure and shopping districts — suited to families and first-time visitors.',
                'itinerary' => [
                    ['day' => 1, 'title' => 'Arrival & Dubai Marina', 'details' => 'Airport pickup, hotel check-in, evening at Dubai Marina.'],
                    ['day' => 2, 'title' => 'City Tour', 'details' => 'Burj Khalifa, Dubai Mall, Dubai Fountain show.'],
                    ['day' => 3, 'title' => 'Desert Safari', 'details' => 'Dune bashing, camel ride, BBQ dinner with entertainment.'],
                    ['day' => 4, 'title' => 'Old Dubai & Free Time', 'details' => 'Gold & Spice Souks, Dubai Creek abra ride, free afternoon.'],
                    ['day' => 5, 'title' => 'Departure', 'details' => 'Breakfast at leisure, airport transfer.'],
                ],
                'inclusions' => ['4 nights hotel accommodation', 'Daily breakfast', 'Airport transfers', 'Desert safari with dinner', 'City tour with guide'],
                'exclusions' => ['International flights', 'Visa fees', 'Travel insurance', 'Personal expenses'],
                'accommodation' => '4-star hotel in Deira or Bur Dubai (upgrades available on request).',
                'transportation' => 'Private airport transfers and air-conditioned vehicle for tours.',
                'activities' => ['Burj Khalifa observation deck', 'Desert safari', 'Dubai Marina walk', 'Old Dubai souk tour'],
                'important_information' => 'Prices are per person based on double occupancy and may vary with season and availability. A valid passport with at least 6 months validity is required.',
                'terms_and_conditions' => 'A deposit is required to confirm booking. Full terms are shared at the time of booking confirmation.',
                'faqs' => [
                    ['q' => 'Is this package suitable for children?', 'a' => 'Yes, it is family-friendly; child rates are available on request.'],
                ],
                'is_featured' => true,
            ],
            [
                'destination_id' => $istanbul?->id,
                'title' => 'Istanbul Discovery — 6 Days',
                'slug' => 'istanbul-discovery-6-days',
                'category' => 'Honeymoon',
                'duration' => '6 Days / 5 Nights',
                'starting_price' => '₦890,000 per person',
                'rating' => 4.8,
                'review_count' => 21,
                'summary' => 'A romantic and culturally rich itinerary through Istanbul\'s historic quarters and Bosphorus waterfront — a popular choice for honeymooners.',
                'itinerary' => [
                    ['day' => 1, 'title' => 'Arrival', 'details' => 'Airport pickup, hotel check-in in Sultanahmet.'],
                    ['day' => 2, 'title' => 'Old City Tour', 'details' => 'Hagia Sophia, Blue Mosque, Topkapi Palace.'],
                    ['day' => 3, 'title' => 'Bosphorus Cruise', 'details' => 'Sunset cruise along the Bosphorus Strait.'],
                    ['day' => 4, 'title' => 'Bazaars & Hammam', 'details' => 'Grand Bazaar, Spice Bazaar, traditional Turkish hammam.'],
                    ['day' => 5, 'title' => 'Free Day', 'details' => 'Leisure day or optional Princes\' Islands excursion.'],
                    ['day' => 6, 'title' => 'Departure', 'details' => 'Breakfast at leisure, airport transfer.'],
                ],
                'inclusions' => ['5 nights hotel accommodation', 'Daily breakfast', 'Airport transfers', 'Bosphorus cruise', 'Old City guided tour'],
                'exclusions' => ['International flights', 'Visa fees', 'Travel insurance', 'Personal expenses'],
                'accommodation' => 'Boutique hotel in Sultanahmet, walking distance to major sites.',
                'transportation' => 'Private transfers and guided tours by air-conditioned vehicle.',
                'activities' => ['Bosphorus sunset cruise', 'Hammam spa experience', 'Old City walking tour'],
                'important_information' => 'Prices are per person based on double occupancy. Passport validity and visa requirements should be confirmed before booking.',
                'terms_and_conditions' => 'A deposit is required to confirm booking. Full terms are shared at the time of booking confirmation.',
                'faqs' => [
                    ['q' => 'Can this be extended to Cappadocia?', 'a' => 'Yes, ask our consultants about a 3-day Cappadocia extension.'],
                ],
                'is_featured' => true,
            ],
            [
                'destination_id' => $makkah?->id,
                'title' => 'Umrah Package — 9 Days',
                'slug' => 'umrah-package-9-days',
                'category' => 'Religious',
                'duration' => '9 Days / 8 Nights',
                'starting_price' => '₦1,650,000 per person',
                'rating' => 4.9,
                'review_count' => 47,
                'summary' => 'A comprehensive Umrah package covering both Makkah and Madinah, with accommodation close to the Haramain and guided Ziyarat.',
                'itinerary' => [
                    ['day' => '1–4', 'title' => 'Madinah', 'details' => 'Arrival, hotel near Masjid an-Nabawi, guided Ziyarat of historic sites.'],
                    ['day' => '5–9', 'title' => 'Makkah', 'details' => 'Transfer to Makkah, Umrah rites, hotel near Masjid al-Haram, Jabal al-Nour visit, departure.'],
                ],
                'inclusions' => ['8 nights hotel accommodation (Madinah & Makkah)', 'Daily meals', 'Ground transport between cities', 'Guided Ziyarat tours', 'Pilgrimage guidance'],
                'exclusions' => ['International flights (unless specified)', 'Pilgrimage visa fees', 'Personal expenses'],
                'accommodation' => 'Hotels within walking distance of the Haramain, tier depends on package level selected.',
                'transportation' => 'Air-conditioned coach transfers between Madinah and Makkah, and to Ziyarat sites.',
                'activities' => ['Guided Ziyarat of Islamic historic sites', 'Group worship coordination'],
                'important_information' => 'Pilgrimage visa processing follows official regulations and timelines, which can vary by season. Comfortable walking shoes and modest dress are required.',
                'terms_and_conditions' => 'A deposit is required to confirm booking. Full terms, including pilgrimage-specific conditions, are shared at booking confirmation.',
                'faqs' => [
                    ['q' => 'Do you arrange group departures?', 'a' => 'Yes, we organise both family and group departures throughout the year.'],
                ],
                'is_featured' => true,
            ],
        ];

        foreach ($packages as $package) {
            Package::updateOrCreate(['slug' => $package['slug']], $package);
        }
    }
}
