<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use DutchCodingCompany\LivewireRecaptcha\Attributes\ValidatesRecaptcha;
use Illuminate\Support\Facades\Log;

class Contact extends Component
{
    public string $gRecaptchaResponse;

    public string $name = '';
    public string $email = '';
    public string $message = '';

    #[ValidatesRecaptcha(action: 'contact')]
    public function submit()
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Mail::to(config('mail.from.address'))->send(new ContactFormSubmitted(
            name: $this->name,
            email: $this->email,
            message: $this->message,
        ));

        $this->reset(['name', 'email', 'message', 'gRecaptchaResponse']);
        session()->flash('success', 'Съобщението беше изпратено успешно!');
    }

    public function render()
    {
        return view('livewire.pages.contact')->layout('layouts.app', [
            'title' => 'Свържи се с нас – Bultorf',
            'description' => 'Имаш въпрос или нужда от съвет? Свържи се с екипа на Bultorf за консултация или запитване за нашите продукти.',
            'robots' => 'index, follow',
            'canonical' => url('/contact'),
            'og_title' => 'Контакт с екипа на Bultorf',
            'og_description' => 'Изпрати ни съобщение чрез контактната форма. Отговаряме бързо и с грижа.',
            'og_image' => asset('images/bultorf-logo.png'),
            'og_url' => url('/contact'),
            'og_type' => 'website',
        ]);
    }
}
