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
        Schema::create('guest_bookings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('guestEmail')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('FullName')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_bookings');
    }
};
