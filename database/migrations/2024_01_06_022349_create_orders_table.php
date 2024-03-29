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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('buyer_id')->references('id')->on('users')
                ->onDelete('cascade'); // cascade means if user is deleted, delete all his orders (user orders
            $table->date('order_date');
            $table->unsignedBigInteger('total_price');
            $table->enum('status', ['pending', 'processing', 'completed', 'declined', 'canceled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
