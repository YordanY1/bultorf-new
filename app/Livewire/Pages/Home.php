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
        ])->layout('layouts.app', [
            'title' => 'Bultorf – Торфени и Почвени Продукти за Земеделие и Градина',
            'description' => 'Качествени торфове, субстрати и почви за дома и бизнеса. Bultorf предлага богата селекция от продукти за плодородна почва.',
            'robots' => 'index, follow',
            'canonical' => url('/'),
            'og_title' => 'Bultorf – Естествени торфове за Плодородна Земя',
            'og_description' => 'Разгледай нашите органични торфове и субстрати. Bultorf е партньор на всяко устойчиво земеделие и озеленяване.',
            'og_image' => asset('images/bultorf-logo.png'),
            'og_url' => url('/'),
            'og_type' => 'website',
        ]);
    }
}
