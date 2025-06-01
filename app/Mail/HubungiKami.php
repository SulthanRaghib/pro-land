<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use function Pest\Laravel\from;

class HubungiKami extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this->view('home.email.hubungi_kami')
            ->with('contactData', $this->contactData)
            ->replyTo($this->contactData['email'], $this->contactData['name'])
            ->subject('Pesan baru dari ' . $this->contactData['name'] . ' (' . $this->contactData['email'] . ')');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subjek = 'Pesan baru dari ' . $this->contactData['name'] . ' (' . $this->contactData['email'] . ')';
        return new Envelope(
            subject: $subjek,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'home.email.hubungi_kami',
            with: [
                'contactData' => $this->contactData,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
