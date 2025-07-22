<?php

namespace App\Livewire\Pages\Products;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class Index extends Component
{
    public array $selectedSlugs = [];

    protected $listeners = ['filterByCategories'];

    public function filterByCategories(array $slugs)
    {
        $this->selectedSlugs = $slugs;
    }


    public function render()
    {
        $products = Product::query()
            ->when(
                $this->selectedSlugs,
                fn($query) => $query->whereHas('category', fn($q) => $q->whereIn('slug', $this->selectedSlugs))
            )
            ->latest()
            ->get();

        $title = 'Каталог с продукти – Bultorf';
        $description = 'Разгледай нашите торфове, субстрати и продукти за почва. Подходящи за дома, градината и професионално земеделие.';

        return view('livewire.pages.products.index', [
            'products' => $products,
        ])->layout('layouts.app', [
            'title' => $title,
            'description' => $description,
            'robots' => 'index, follow',
            'canonical' => url('/products'),
            'og_title' => $title,
            'og_description' => $description,
            'og_image' => asset('images/bultorf-logo.png'),
            'og_url' => url('/products'),
            'og_type' => 'website',
        ]);
    }
}
