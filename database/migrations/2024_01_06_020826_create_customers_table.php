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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->onDelete('cascade'); // cascade means if user is deleted, delete all his addresses (user addresses
            $table->foreignId('province_id')->references('id')->on('provinces')
                ->cascadeOnDelete(); // cascade means if province is deleted, delete all its cities (cities
            $table->foreignId('city_id')->references('id')->on('cities')->cascadeOnDelete();
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
