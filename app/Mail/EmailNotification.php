<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Message as MailMessage;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class EmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $recipient_email;
    public $subject;
    public $messagee;

    public function __construct($subject, $messagee, $recipient_email, $attachments = [])
    {
        $this->recipient_email = $recipient_email;
        $this->subject = $subject;
        $this->messagee = $messagee;
    }

    public function build()
    {
        $mail = $this->view('email')->with([
            'recipient_email' => $this->recipient_email,
            'subject' => $this->subject,
            'messagee' => $this->messagee,
        ]);
    
       
    }
    
    
}
