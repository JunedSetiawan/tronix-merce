<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // // products electronics

        $products = [
            [
                'name' => 'Samsung Galaxy S21 Ultra 5G',

                'description' => 'Samsung Galaxy S21 Ultra 5G Android smartphone. Announced Jan 2021. Features 6.8″ display, Exynos 2100 chipset, 5000 mAh battery, 512 GB storage, 16 GB RAM, Corning Gorilla Glass Victus.',
                'price' => 1199.99,
                'category_id' => 1,
                'brand_id' => 1,
            ],
            [
                'name' => 'Samsung Galaxy S21+ 5G',
                'description' => 'Samsung Galaxy S21+ 5G Android smartphone. Announced Jan 2021. Features 6.7″ display, Exynos 2100 chipset, 4800 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus.',
                'price' => 999.99,
                'category_id' => 1,
                'brand_id' => 1,
            ],
            [
                'name' => 'Samsung Galaxy S21 5G',
                'description' => 'Samsung Galaxy S21 5G Android smartphone. Announced Jan 2021. Features 6.2″ display, Exynos 2100 chipset, 4000 mAh battery, 256 GB storage, 8 GB RAM, Corning Gorilla Glass Victus.',
                'price' => 799.99,
                'category_id' => 1,
                'brand_id' => 1,
            ],
            // product laptop
            [
                'name' => 'Apple MacBook Pro 13 (2020)',
                'description' => 'Apple MacBook Pro 13 (2020) Apple M1 Chip (8-core CPU, 8-core GPU) 8GB RAM, 256GB SSD, 13.3-inch Retina Display with True Tone, Backlit Magic Keyboard, Touch Bar and Touch ID, Force Touch Trackpad, Two Thunderbolt / USB 4 ports, 802.11ax Wi-Fi 6 wireless networking, Bluetooth 5.0 wireless technology, macOS Big Sur',
                'price' => 1299.99,
                'category_id' => 2,
                'brand_id' => 2,

            ],
            [
                'name' => 'Apple MacBook Pro 16 (2019)',
                'description' => 'Apple MacBook Pro 16 (2019) Intel Core i9 2.3GHz 8-core 9th-generation Intel Core i9 processor, Turbo Boost up to 4.8GHz, AMD Radeon Pro 5500M with 4GB of GDDR6 memory, 16GB 2666MHz DDR4 memory, 1TB SSD storage, 16-inch Retina display with True Tone, Touch Bar and Touch ID, Four Thunderbolt 3 ports, Backlit Keyboard - US English',
                'price' => 2399.99,
                'category_id' => 2,
                'brand_id' => 2,

            ],
            [
                'name' => 'Apple MacBook Air 13 (2020)',
                'description' => 'Apple MacBook Air 13 (2020) Apple M1 Chip (8-core CPU, 7-core GPU) 8GB RAM, 256GB SSD, 13.3-inch Retina Display with True Tone, Backlit Magic Keyboard, Touch ID, Force Touch Trackpad, Two Thunderbolt / USB 4 ports, 802.11ax Wi-Fi 6 wireless networking, Bluetooth 5.0 wireless technology, macOS Big Sur',
                'price' => 999.99,
                'category_id' => 2,
                'brand_id' => 2,

            ],
            // products monitor 3 only category_id for monitor is 5
            [
                'name' => 'Samsung Odyssey G9',
                'description' => 'Samsung Odyssey G9 49" DQHD 240Hz Curved Gaming Monitor with 1000R Curvature, 1ms Response Time, Quantum HDR1000, NVIDIA G-SYNC & FreeSync, QLED (LC49G95TSSNXZA)',
                'price' => 1499.99,
                'category_id' => 5,
                'brand_id' => 1,
            ],
            [
                'name' => 'Samsung Odyssey G7',
                'description' => 'Samsung Odyssey G7 32" QHD 240Hz Curved Gaming Monitor with 1000R Curvature, 1ms Response Time, FreeSync Premium Pro, QLED (LC32G75TQSNXZA)',
                'price' => 699.99,
                'category_id' => 5,
                'brand_id' => 1,
            ],
            [
                'name' => 'Samsung Odyssey G7',
                'description' => 'Samsung Odyssey G7 27" QHD 240Hz Curved Gaming Monitor with 1000R Curvature, 1ms Response Time, FreeSync Premium Pro, QLED (LC27G75TQSNXZA)',
                'price' => 599.99,
                'category_id' => 5,
                'brand_id' => 1,
            ],
            // products for printer 4 only category_id 6
            [
                'name' => 'Canon PIXMA TS3320',
                'description' => 'Canon PIXMA TS3320 Wireless Inkjet All-in-One Printer, White, Works with Alexa',
                'price' => 79.99,
                'category_id' => 6,
                'brand_id' => 3,
            ],
            [
                'name' => 'Canon PIXMA TR4520',
                'description' => 'Canon PIXMA TR4520 Wireless All in One Photo Printer with Mobile Printing, Black, Works with Alexa',
                'price' => 99.99,
                'category_id' => 6,
                'brand_id' => 3,
            ],
            [
                'name' => 'Canon PIXMA TR150',
                'description' => 'Canon PIXMA TR150 Wireless Mobile Printer With Airprint And Cloud Compatible, Black',
                'price' => 199.99,
                'category_id' => 6,
                'brand_id' => 3,
            ],
            // products for cameras 3 only with category_id 11
            [
                'name' => 'Canon EOS R5',
                'description' => 'Canon EOS R5 Full-Frame Mirrorless Camera with 8K Video, 45 Megapixel Full-Frame CMOS Sensor, DIGIC X Image Processor, Dual Memory Card Slots, and Up to 12 fps Mechnical Shutter, Body Only',
                'price' => 3899.99,
                'category_id' => 11,
                'brand_id' => 3,
            ],
            [
                'name' => 'Canon EOS R6',
                'description' => 'Canon EOS R6 Full-Frame Mirrorless Camera with 4K Video, Full-Frame CMOS Senor, DIGIC X Image Processor, Dual UHS-II SD Memory Card Slots, and Up to 12 fps with Mechnical Shutter, Body Only',
                'price' => 2499.99,
                'category_id' => 11,
                'brand_id' => 3,
            ],
            [
                'name' => 'Canon EOS M50 Mark II',
                'description' => 'Canon EOS M50 Mark II + EF-M 15-45mm is STM Kit Black',
                'price' => 599.99,
                'category_id' => 11,
                'brand_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::factory()->create($product);
        }
    }
}
