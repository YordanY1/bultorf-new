<?php

namespace App\Livewire\Pages\Products;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.pages.products.show')->layout('layouts.app');
    }
}
