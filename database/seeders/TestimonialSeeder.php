<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'customer_name' => 'A. Suleiman',
                'location' => 'Kano, Nigeria',
                'rating' => 5,
                'review' => 'Our Umrah trip was handled with so much care — every detail from the visa to the hotel in Madinah was sorted before we even left home. Highly recommended.',
                'is_featured' => true,
            ],
            [
                'customer_name' => 'F. Bello',
                'location' => 'Abuja, Nigeria',
                'rating' => 5,
                'review' => 'Booked our honeymoon package to Istanbul and it exceeded expectations. Responsive team, clear itinerary, no surprises.',
                'is_featured' => true,
            ],
            [
                'customer_name' => 'M. Ibrahim',
                'location' => 'Lagos, Nigeria',
                'rating' => 4,
                'review' => 'Good communication throughout our Dubai family trip. The desert safari was a highlight for the kids. Will book again.',
                'is_featured' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['customer_name' => $testimonial['customer_name'], 'review' => $testimonial['review']],
                $testimonial
            );
        }
    }
}
