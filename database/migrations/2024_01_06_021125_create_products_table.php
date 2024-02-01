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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')
                ->onDelete('cascade'); // cascade means if product category is deleted, delete all its products (product category products)
            $table->foreignId('brand_id')->references('id')->on('brands')->cascadeOnDelete(); // cascade means if product brand is deleted, delete all its products (product brand products)
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('stock');
            $table->unsignedBigInteger('weight');
            $table->string('image');
            $table->boolean('is_featured')->default(false);
            $table->date('production_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
