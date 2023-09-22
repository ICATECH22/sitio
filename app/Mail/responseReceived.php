<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class responseReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $sendMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendMail)
    {
        //
        $this->sendMail = $sendMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from = $this->sendMail->email;
        $name = $this->sendMail->nombre;
        $subject = "Correo de Recepción de Dastos Buzón Digital de: " . $from;
        $cc = "icatech@icatech.chiapas.gob.mx";

        return $this->from($from, $name)
            ->cc($cc)
            ->subject($subject)
            ->view('email.adminsend')
            ->attach($this->sendMail->file->getRealPath(), [
                'as' => $this->sendMail->file->getClientOriginalName(),
                'mime' => $this->sendMail->file->getMimeType(),
            ]);
    }
}
