<?php

namespace Database\Factories;

use App\Models\GuideArticle;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuideArticleFactory extends Factory
{
    protected $model = GuideArticle::class;

    public function definition(): array
    {
        $title = $this->faker->unique()->sentence();

        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'category' => 'Travel Tips',
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(3, true),
            'read_time' => '4 min read',
            'published_at' => now(),
        ];
    }
}
