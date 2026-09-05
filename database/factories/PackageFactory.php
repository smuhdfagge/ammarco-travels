<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    protected $model = Package::class;

    public function definition(): array
    {
        $title = $this->faker->unique()->words(3, true).' Package';

        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'category' => $this->faker->randomElement(['Family', 'Honeymoon', 'Adventure', 'Luxury']),
            'duration' => '5 Days / 4 Nights',
            'starting_price' => '₦500,000 per person',
            'rating' => 4.5,
            'review_count' => 10,
            'summary' => $this->faker->paragraph(),
            'is_featured' => false,
        ];
    }
}
