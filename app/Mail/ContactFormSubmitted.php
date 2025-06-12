<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $name, public string $email, public string $message) {}

    public function build()
    {
        return $this->subject('Ново съобщение от контактната форма')
            ->view('emails.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'bodyMessage' => $this->message,
            ]);
    }
}
