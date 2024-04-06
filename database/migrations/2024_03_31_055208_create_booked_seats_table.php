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
        Schema::create('booked_seats', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('bookingId')->index();
            $table->foreign('bookingId')->references('id')->on('bookings')->onDelete('cascade');
            $table->string('seatType')->nullable();
            $table->string('seatNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_seats');
    }
};
