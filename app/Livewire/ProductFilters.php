<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Category;

class ProductFilters extends Component
{
    #[Url]
    public string $categories = '';

    public array $selectedSlugs = [];

    public function mount()
    {
        $this->selectedSlugs = $this->categories
            ? explode(',', $this->categories)
            : [];
    }

    public function applyCategoryFilter()
    {
        logger('🔄 applyCategoryFilter:', $this->selectedSlugs);

        $this->categories = implode(',', $this->selectedSlugs);
        $this->dispatch('filterByCategories', $this->selectedSlugs);
    }


    public function clearCategories()
    {
        $this->selectedSlugs = [];
        $this->categories = '';
        $this->dispatch('filterByCategories', []);
    }

    public function render()
    {
        return view('livewire.product-filters', [
            'categoryList' => Category::all(),
        ]);
    }
}
