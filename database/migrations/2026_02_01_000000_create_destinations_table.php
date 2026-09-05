<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('region'); // Africa, Middle East, Europe, Asia, North America, South America, Australia & Oceania
            $table->string('hero_image')->nullable();
            $table->string('starting_price')->nullable();
            $table->string('best_time_to_visit')->nullable();
            $table->string('currency')->nullable();
            $table->string('language')->nullable();
            $table->string('time_zone')->nullable();
            $table->text('short_description');
            $table->text('overview');
            $table->json('top_attractions')->nullable();
            $table->json('things_to_do')->nullable();
            $table->text('weather_overview')->nullable();
            $table->text('visa_requirements')->nullable();
            $table->text('transportation_info')->nullable();
            $table->text('accommodation_options')->nullable();
            $table->text('food_recommendations')->nullable();
            $table->text('travel_tips')->nullable();
            $table->text('safety_information')->nullable();
            $table->string('estimated_budget')->nullable();
            $table->json('faqs')->nullable(); // [{q, a}]
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
