<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categoryIds = Category::pluck('id', 'name');

        Product::create([
            'name' => 'Амониева селитра 34% N',
            'slug' => Str::slug('Амониева селитра'),
            'description' => 'Азотен тор, подходящ за зърнени култури и зеленчуци.',
            'price' => 45.50,
            'image' => 'amonia.webp',
            'category_id' => $categoryIds['Азотни торфове'],
            'top_position' => true,
        ]);

        Product::create([
            'name' => 'Суперфосфат 18%',
            'slug' => Str::slug('Амониева селитра'),
            'description' => 'Фосфорен тор за стимулиране на кореновата система.',
            'price' => 38.00,
            'image' => 'amonia.webp',
            'category_id' => $categoryIds['Фосфорни торфове'],
            'top_position' => false,
        ]);

        Product::create([
            'name' => 'Калиев хлорид 60%',
            'slug' => Str::slug('Амониева селитра'),
            'description' => 'Калиев тор за подобряване на устойчивостта на растенията.',
            'price' => 42.75,
            'image' => 'amonia.webp',
            'category_id' => $categoryIds['Калиеви торфове'],
            'top_position' => false,
        ]);
    }
}
