<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProductBrand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'user@example.com',
        // ]);

        $this->call([
            AddressSeeder::class,
            ProductCategory::class,
            ProductBrandSeeder::class,
            RolePermissionSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            DiscountSeeder::class,
        ]); // add this line

    }
}
