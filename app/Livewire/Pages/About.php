<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.pages.about')->layout('layouts.app', [
            'title' => 'За нас – Bultorf',
            'description' => 'Bultorf е българска компания, специализирана в торфени и почвени продукти. Нашата мисия е да предоставим качествени решения за плодородна и здрава почва.',
            'robots' => 'index, follow',
            'canonical' => url('/about'),
            'og_title' => 'Bultorf – За компанията',
            'og_description' => 'Научи повече за Bultorf – нашата история, мисия и ангажимент към устойчиво земеделие и почвено здраве.',
            'og_image' => asset('images/bultorf-logo.png'),
            'og_url' => url('/about'),
            'og_type' => 'website',
        ]);
    }
}
