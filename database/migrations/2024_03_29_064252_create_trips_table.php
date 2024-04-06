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
        Schema::create('trips', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('vechilesId')->index()->nullable();
            $table->foreign('vechilesId')->references('id')->on('vechiles')->onDelete('cascade');
            $table->uuid('driverId')->index()->nullable();
            $table->foreign('driverId')->references('id')->on('users')->onDelete('cascade');
            $table->string('pickup')->nullable();
            $table->string('destination')->nullable();
            $table->time('departureTime')->nullable();
            $table->time('totalAvailableSeats')->nullable();
            $table->time('fareAmount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
