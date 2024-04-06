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
        Schema::create('trip_histories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('bookingId')->index();
            $table->foreign('bookingId')->references('id')->on('bookings')->onDelete('cascade');
            $table->time('startTime');
            $table->time('endTime');
            $table->date('tripDate');
            $table->string('distance');
            $table->string('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_histories');
    }
};
