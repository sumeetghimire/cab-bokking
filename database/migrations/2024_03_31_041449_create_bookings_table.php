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
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('bookById')->index()->nullable();
            $table->foreign('bookById')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('guestBooking')->default(false);
            $table->uuid('guessBookingId')->index()->nullable();
            $table->foreign('guessBookingId')->references('id')->on('guest_bookings')->onDelete('cascade');
            $table->string('pickupLocation')->nullable();
            $table->string('dropLocation')->nullable();
            $table->string('pickupDateTime')->nullable();
            $table->uuid('driverId')->index();
            $table->foreign('driverId')->references('id')->on('drivers')->onDelete('cascade');
            $table->uuid('vehicleId')->index();
            $table->foreign('vehicleId')->references('id')->on('vechiles')->onDelete('cascade');
            $table->string('estimateCordinatesPickup')->nullable();
            $table->string('bookingStatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
