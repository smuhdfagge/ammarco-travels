<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guide_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // Destination Guides, Visa Guides, Flight Guides, Hotel Guides, Travel Tips, Travel Safety, Airport Guides, Budget Travel, Luxury Travel, Family Travel, Business Travel, Religious Travel, Seasonal Travel
            $table->string('cover_image')->nullable();
            $table->text('excerpt');
            $table->longText('body');
            $table->string('read_time')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guide_articles');
    }
};
