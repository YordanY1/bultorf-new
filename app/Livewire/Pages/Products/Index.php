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
        logger('📥 Index received slugs:', $slugs);
        $this->selectedSlugs = $slugs;
    }


    public function render()
    {
        $products = Product::query()
            ->when(
                $this->selectedSlugs,
                function ($query) {
                    $query->whereHas('category', function ($q) {
                        $q->whereIn('slug', $this->selectedSlugs);
                    });
                }
            )
            ->latest()
            ->get();

        return view('livewire.pages.products.index', [
            'products' => $products,
        ])->layout('layouts.app');
    }
}
