<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Азотни торове',
            'Фосфорни торове',
            'Калиеви торове',
            'Комплексни торове',
            'Органични торове',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => \Str::slug($name),
            ]);
        }
    }
}
