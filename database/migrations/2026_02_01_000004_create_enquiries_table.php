<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // quote, flight, hotel, visa, corporate, contact
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->json('details'); // type-specific structured data
            $table->text('message')->nullable();
            $table->string('status')->default('new'); // new, contacted, closed
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
