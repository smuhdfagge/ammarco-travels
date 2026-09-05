<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinationFactory extends Factory
{
    protected $model = Destination::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->city().', '.$this->faker->country();

        return [
            'name' => $name,
            'slug' => \Illuminate\Support\Str::slug($name),
            'region' => $this->faker->randomElement(['Africa', 'Middle East', 'Europe', 'Asia']),
            'starting_price' => 'From ₦500,000',
            'best_time_to_visit' => 'October – March',
            'currency' => 'USD',
            'language' => 'English',
            'time_zone' => 'UTC',
            'short_description' => $this->faker->sentence(),
            'overview' => $this->faker->paragraph(),
            'top_attractions' => [$this->faker->word(), $this->faker->word()],
            'things_to_do' => [$this->faker->word(), $this->faker->word()],
            'is_featured' => false,
        ];
    }
}
