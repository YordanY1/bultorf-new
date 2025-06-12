<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class Contact extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';

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

        $this->reset(['name', 'email', 'message']);
        session()->flash('success', 'Съобщението беше изпратено успешно!');
    }

    public function render()
    {
        return view('livewire.pages.contact')->layout('layouts.app');
    }
}
