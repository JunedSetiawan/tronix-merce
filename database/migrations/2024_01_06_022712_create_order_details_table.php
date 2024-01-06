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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->references('id')->on('orders')
                ->onDelete('cascade'); // cascade means if order is deleted, delete all its order details (order items
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade'); // cascade means if product is deleted, delete all its order details (order items
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
