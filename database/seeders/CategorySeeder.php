<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Electrónica', 
            'description' => 'Dispositivos electrónicos y gadgets'
        ]);

        Category::create([
            'name' => 'Hogar', 
            'description' => 'Artículos para el hogar'
        ]);

        Category::create([
            'name' => 'Deportes', 
            'description' => 'Artículos deportivos'
        ]);
    }
}
