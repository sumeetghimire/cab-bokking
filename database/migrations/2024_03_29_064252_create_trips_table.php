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
            $table->foreign('pickup')->references('id')->on('sub_areas')->onDelete('cascade');

            $table->string('destination')->nullable();
            $table->foreign('destination')->references('id')->on('sub_areas')->onDelete('cascade');

            $table->time('departureTime')->nullable();
            $table->date('departureDate')->nullable();
            $table->integer('totalAvailableSeats')->nullable();
            $table->integer('fareAmount')->nullable();
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
