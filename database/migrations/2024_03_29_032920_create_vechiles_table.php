<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vechiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('vehicleNumber')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->string('vechileImageUrl')->nullable();
            $table->integer('totalSeats')->default(5);
            $table->integer('availableSeats')->default(5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vechiles');
    }
};
