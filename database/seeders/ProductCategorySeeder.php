<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat kategori 

        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and gadgets'
            ],
            [
                'name' => 'Clothing',
                'description' => 'Apparel and garments'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $products = [
            [
                'name' => 'Laptop',
                'description' => 'High-performance laptop',
                'price' => 1500.00,
                'stock' => 10,
                'category_id' => 1
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Comfortable cotton t-shirt',
                'price' => 20.00,
                'stock' => 50,
                'category_id' => 2
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
