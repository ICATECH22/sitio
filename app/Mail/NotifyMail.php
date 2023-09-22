<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        //
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $address = $this->mailData->to;
        $subject = $this->mailData->subject;
        $name = $this->mailData->name;
        // $bcc = $this->mailData->bcc;
        $from = $this->mailData->cc;

        return $this->from($from, $name)
            ->subject($subject)
           ->view('email.mailsend');
    }
}
