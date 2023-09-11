<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Testimonialsmail extends Mailable
{
    use Queueable, SerializesModels;

    public $testimonialsData;

    public $subject;
    /**
     * Create a new message instance.
     */
    public function __construct(array $testimonialsData,string $subject)
    {
        $this->testimonialsData= $testimonialsData;
        $this->subject = $subject;
    }

    public function build()
{
    return $this->subject($this->subject)
        ->markdown('emails.testimonialssmail')
        ->attach($this->testimonialsData['Resume']->getRealPath(), [
            'as' => $this->testimonialsData['Resume']->getClientOriginalName(),
            'mime' => $this->testimonialsData['Resume']->getClientMimeType(),
        ]);
}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:  $this->subject
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.testimonialssmail',
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
