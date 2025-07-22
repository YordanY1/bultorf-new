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
            'Азотни торфове',
            'Фосфорни торфове',
            'Калиеви торфове',
            'Комплексни торфове',
            'Органични торфове',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => \Str::slug($name),
            ]);
        }
    }
}
