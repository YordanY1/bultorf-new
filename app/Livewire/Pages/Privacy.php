<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Privacy extends Component
{
    public function render()
    {
        return view('livewire.pages.privacy')->layout('layouts.app', [
            'title' => 'Политика за поверителност – Bultorf',
            'description' => 'Разберете какви лични данни събираме и как ги обработваме на сайта bultorf.bg.',
            'robots' => 'index, follow',
            'canonical' => url('/privacy'),
            'og_title' => 'Политика за поверителност',
            'og_description' => 'Научете какви данни събира сайтът bultorf.bg чрез формата за контакт и reCAPTCHA.',
            'og_image' => asset('images/bultorf-logo.png'),
            'og_url' => url('/privacy'),
            'og_type' => 'article',
        ]);
    }
}
