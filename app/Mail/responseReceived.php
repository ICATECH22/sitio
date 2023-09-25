<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;

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

        $view = $this->from($from, $name)
            ->cc($cc)
            ->subject($subject)
            ->view('email.adminsend');

            return File::exists($this->sendMail->file) ? $view->attach($this->sendMail->file->getRealPath(), [
                'as' => $this->sendMail->file->getClientOriginalName(),
                'mime' => $this->sendMail->file->getMimeType(),
            ]) : $view;
    }
}
