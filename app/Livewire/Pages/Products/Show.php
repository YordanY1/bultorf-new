<?php

namespace App\Livewire\Pages\Products;

use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\Component;

class Show extends Component
{
    public Product $product;

    public function render()
    {
        $title = $this->product->name . ' – Bultorf';
        $description = strip_tags(Str::limit($this->product->description, 150));
        $ogImage = $this->product->image_url ?? asset('images/bultorf-logo.png');

        return view('livewire.pages.products.show', [
            'product' => $this->product,
        ])->layout('layouts.app', [
            'title' => $title,
            'description' => $description,
            'robots' => 'index, follow',
            'canonical' => route('products.show', $this->product),
            'og_title' => $title,
            'og_description' => $description,
            'og_image' => $ogImage,
            'og_url' => route('products.show', $this->product),
            'og_type' => 'product',
        ]);
    }
}
