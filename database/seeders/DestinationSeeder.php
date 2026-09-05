<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        $destinations = [
            [
                'name' => 'Dubai, United Arab Emirates',
                'slug' => 'dubai-uae',
                'region' => 'Middle East',
                'hero_image' => null,
                'starting_price' => 'From ₦850,000',
                'best_time_to_visit' => 'November – March',
                'currency' => 'UAE Dirham (AED)',
                'language' => 'Arabic (English widely spoken)',
                'time_zone' => 'GST (UTC+4)',
                'short_description' => 'A dazzling blend of futuristic skylines, desert adventure and world-class shopping.',
                'overview' => 'Dubai pairs record-breaking architecture with a rich Emirati heritage, making it a favourite for both leisure travellers and business visitors. Expect gleaming towers, luxury malls, desert safaris and some of the world\'s most ambitious attractions, all connected by an efficient metro and road network.',
                'top_attractions' => ['Burj Khalifa', 'Dubai Mall & Dubai Fountain', 'Palm Jumeirah', 'Dubai Marina', 'Al Fahidi Historic District', 'Desert safari & dune bashing'],
                'things_to_do' => ['Desert safari with dinner under the stars', 'Dhow cruise along Dubai Creek', 'Visit the Museum of the Future', 'Shopping at the Gold and Spice Souks', 'Day trip to Abu Dhabi'],
                'weather_overview' => 'Hot desert climate. Summers (June–September) are extremely hot and humid; winters (November–March) are warm and pleasant, ideal for outdoor activities.',
                'visa_requirements' => 'Nigerian passport holders require a UAE visa in advance. Our visa assistance team can guide you through documentation and application — see our Visa Assistance page for details. Processing times and requirements are subject to change; always confirm current rules before booking.',
                'transportation_info' => 'Dubai has an extensive metro system, ride-hailing apps, and affordable taxis. Airport transfers can be arranged as part of your package.',
                'accommodation_options' => 'From budget-friendly 3-star hotels in Deira to 5-star beachfront resorts on Palm Jumeirah — we match accommodation to your budget and travel style.',
                'food_recommendations' => 'Try Emirati dishes like machboos and shawarma, explore international fine dining, or sample the food stalls in Old Dubai\'s souks.',
                'travel_tips' => 'Dress modestly in public and government areas. Fridays are part of the weekend. Tipping (around 10%) is customary but not mandatory.',
                'safety_information' => 'Dubai is generally considered very safe for travellers, with low crime rates and strict law enforcement. As with any destination, keep valuables secure and follow local laws.',
                'estimated_budget' => 'Mid-range: approx. $150–$250/day per person, excluding flights',
                'faqs' => [
                    ['q' => 'Do I need a visa to visit Dubai?', 'a' => 'Most Nigerian travellers require a visa arranged in advance. Contact our visa assistance team for current requirements.'],
                    ['q' => 'What is the best time to visit?', 'a' => 'November to March offers the most comfortable weather for sightseeing and outdoor activities.'],
                ],
                'is_featured' => true,
            ],
            [
                'name' => 'Istanbul, Türkiye',
                'slug' => 'istanbul-turkiye',
                'region' => 'Europe',
                'hero_image' => null,
                'starting_price' => 'From ₦780,000',
                'best_time_to_visit' => 'April – May, September – November',
                'currency' => 'Turkish Lira (TRY)',
                'language' => 'Turkish',
                'time_zone' => 'TRT (UTC+3)',
                'short_description' => 'Where East meets West — historic mosques, grand bazaars and Bosphorus views.',
                'overview' => 'Istanbul straddles two continents and centuries of history, from Byzantine and Ottoman landmarks to a thriving modern food and arts scene. It\'s an accessible, walkable city that rewards travellers with dramatic skylines and warm hospitality.',
                'top_attractions' => ['Hagia Sophia', 'Blue Mosque', 'Topkapi Palace', 'Grand Bazaar', 'Bosphorus Strait cruise', 'Galata Tower'],
                'things_to_do' => ['Sunset Bosphorus cruise', 'Explore the Grand & Spice Bazaars', 'Turkish hammam spa experience', 'Day trip to Cappadocia (extension package available)'],
                'weather_overview' => 'Mediterranean/temperate climate. Spring and autumn are mild and comfortable; summers are warm, winters can be cold and rainy.',
                'visa_requirements' => 'Nigerian passport holders typically require a visa or e-Visa in advance. Confirm current requirements with our visa assistance team before booking.',
                'transportation_info' => 'Istanbul has trams, metro, ferries and buses. Airport transfers can be arranged as part of your package.',
                'accommodation_options' => 'Boutique hotels in Sultanahmet for history buffs, or modern hotels near Taksim for nightlife and shopping.',
                'food_recommendations' => 'Try Turkish breakfast spreads, kebabs, baklava, and Turkish tea or coffee at a traditional café.',
                'travel_tips' => 'Bargaining is expected in bazaars. Modest dress is required when visiting mosques.',
                'safety_information' => 'Istanbul is generally safe for tourists in main visitor areas; standard travel precautions apply.',
                'estimated_budget' => 'Mid-range: approx. $80–$150/day per person, excluding flights',
                'faqs' => [
                    ['q' => 'Can I combine Istanbul with Cappadocia?', 'a' => 'Yes, ask about our Istanbul + Cappadocia extension packages.'],
                ],
                'is_featured' => true,
            ],
            [
                'name' => 'Makkah & Madinah, Saudi Arabia',
                'slug' => 'makkah-madinah-saudi-arabia',
                'region' => 'Middle East',
                'hero_image' => null,
                'starting_price' => 'From ₦1,450,000',
                'best_time_to_visit' => 'Year-round (avoid peak Ramadan/Hajj crowding if seeking a quieter Umrah)',
                'currency' => 'Saudi Riyal (SAR)',
                'language' => 'Arabic',
                'time_zone' => 'AST (UTC+3)',
                'short_description' => 'Sacred journeys to Islam\'s holiest cities, arranged with care and attention to detail.',
                'overview' => 'Our Umrah and Hajj packages handle the logistics of a sacred journey — flights, accommodation close to the Haramain, and transport — so pilgrims can focus on worship. Packages are organised in accordance with official pilgrimage requirements.',
                'top_attractions' => ['Masjid al-Haram', 'Masjid an-Nabawi', 'Jabal al-Nour', 'Quba Mosque'],
                'things_to_do' => ['Guided Ziyarat (visitation) tours of historic Islamic sites', 'Group and family pilgrimage packages'],
                'weather_overview' => 'Hot desert climate; summers are extremely hot. Many pilgrims prefer cooler months for physical comfort.',
                'visa_requirements' => 'Pilgrimage visas are arranged through licensed pilgrimage channels as part of your package. Requirements are subject to official regulation and change — our team will guide you through current documentation needs.',
                'transportation_info' => 'Ground transport between airports, hotels and the holy sites is included in pilgrimage packages.',
                'accommodation_options' => 'Hotels ranging from economy to premium, selected by proximity to the Haramain.',
                'food_recommendations' => 'Hotels typically offer international and Middle Eastern menus; local eateries near the holy sites serve regional dishes.',
                'travel_tips' => 'Follow official pilgrimage guidance on ihram, rites and conduct. Comfortable walking shoes are essential.',
                'safety_information' => 'Crowd management is significant during peak seasons; follow official authority guidance at all times.',
                'estimated_budget' => 'Varies significantly by package tier and season — request a quote for current pricing',
                'faqs' => [
                    ['q' => 'Do you offer group Umrah packages?', 'a' => 'Yes, we arrange both individual/family and group pilgrimage packages.'],
                ],
                'is_featured' => true,
            ],
        ];

        foreach ($destinations as $destination) {
            Destination::updateOrCreate(['slug' => $destination['slug']], $destination);
        }
    }
}
