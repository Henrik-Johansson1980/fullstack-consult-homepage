<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @param array<string, string> $submission
     */
    public function __construct(public readonly array $submission) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ny förfrågan från '.$this->submission['name'],
            replyTo: [$this->submission['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact-form',
            with: ['submission' => $this->submission],
        );
    }

}
