<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Careersmail extends Mailable
{
    use Queueable, SerializesModels;

    public $careersData;
    public $subject;

    public function __construct(array $careersData, string $subject)
    {
        $this->careersData = $careersData;
        $this->subject = $subject;
    }
    public function build()
{
    return $this->subject($this->subject)
        ->markdown('emails.careersmail')
        ->attach($this->careersData['Resume']->getRealPath(), [
            'as' => $this->careersData['Resume']->getClientOriginalName(),
            'mime' => $this->careersData['Resume']->getClientMimeType(),
        ]);
}
public function envelope(): Envelope
{
    return new Envelope(
        subject:  $this->subject
    );
}
public function content(): Content
{
    return new Content(
        markdown: 'emails.careersmail',
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
