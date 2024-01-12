<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Mobile Phones',
            'Laptops',
            'Tablets',
            'Monitors',
            'Printers',
            'Cameras',
            'TVs',
            'Smartwatches',
            'Accessories',
            'Others'
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category,
                'slug' => \Illuminate\Support\Str::slug($category),
            ]);
        }
    }
}
