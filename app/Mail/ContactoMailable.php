<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $apellido;
    public $email;
    public $asunto;
    public $mensaje;

    /**
     * Create a new message instance.
     */
    public function __construct($nombre, $apellido, $email, $asunto, $mensaje)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('clusterceydt@ceydt.site', 'CEYDT Cluster')
            ->replyTo($this->email, $this->nombre . ' ' . $this->apellido)
            ->subject($this->asunto)
            ->view('emails.contacto'); // vista del correo
    }
}

