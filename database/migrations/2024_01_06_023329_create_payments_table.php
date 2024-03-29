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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->onDelete('cascade'); // cascade means if user is deleted, delete all his payments (user payments
            $table->foreignId('order_id')->references('id')->on('orders')
                ->onDelete('cascade'); // cascade means if order is deleted, delete all its payments (payment items
            $table->string('payment_method');
            $table->enum('payment_status', ['pending', 'completed', 'declined', 'canceled']);
            $table->string('payment_amount');
            $table->date('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
