<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Laptop', 'description' => 'Laptop HP', 'price' => 500.00, 'category_id' => 1, 'stock' => 10],
            ['name' => 'Mouse', 'description' => 'Mouse Logitech', 'price' => 20.00, 'category_id' => 1, 'stock' => 50],
            ['name' => 'Teclado', 'description' => 'Teclado Razer', 'price' => 50.00, 'category_id' => 1, 'stock' => 30],
            ['name' => 'Silla', 'description' => 'Silla gamer', 'price' => 150.00, 'category_id' => 2, 'stock' => 20],
            ['name' => 'Mesa', 'description' => 'Mesa de madera', 'price' => 100.00, 'category_id' => 2, 'stock' => 15],
            ['name' => 'Cama', 'description' => 'Cama matrimonial', 'price' => 200.00, 'category_id' => 2, 'stock' => 5],
            ['name' => 'Balón', 'description' => 'Balón de fútbol', 'price' => 10.00, 'category_id' => 3, 'stock' => 100],
            ['name' => 'Raqueta', 'description' => 'Raqueta de tenis', 'price' => 30.00, 'category_id' => 3, 'stock' => 25],
            ['name' => 'Guantes', 'description' => 'Guantes de box', 'price' => 15.00, 'category_id' => 3, 'stock' => 40],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
