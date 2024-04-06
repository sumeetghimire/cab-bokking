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
        Schema::create('drivers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('userId')->index();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('vechileId')->index();
            $table->foreign('vechileId')->references('id')->on('vechiles')->onDelete('cascade');
            $table->string('licenseNumber')->nullable();
            $table->string('licenseImageURL')->nullable();
            $table->boolean('availability')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
