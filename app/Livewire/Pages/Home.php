<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Product;

class Home extends Component
{
    public function render()
    {
        $topProducts = Product::where('top_position', true)->take(6)->get();

        return view('livewire.pages.home', [
            'topProducts' => $topProducts
        ])->layout('layouts.app');
    }
}
