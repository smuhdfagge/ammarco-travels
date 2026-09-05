<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // Family, Honeymoon, Adventure, Luxury, Business, Religious, Group
            $table->string('hero_image')->nullable();
            $table->string('duration'); // e.g. "7 Days / 6 Nights"
            $table->string('starting_price');
            $table->decimal('rating', 2, 1)->nullable();
            $table->unsignedInteger('review_count')->default(0);
            $table->text('summary');
            $table->json('itinerary')->nullable(); // [{day, title, details}]
            $table->json('inclusions')->nullable();
            $table->json('exclusions')->nullable();
            $table->text('accommodation')->nullable();
            $table->text('transportation')->nullable();
            $table->json('activities')->nullable();
            $table->text('important_information')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->json('faqs')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
