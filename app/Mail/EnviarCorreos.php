<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarCorreos extends Mailable
{
    use Queueable, SerializesModels;
    public $arreglo = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($arreglo)
    {
        $this->arreglo = $arreglo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nombre = $this->arreglo['nombre'] . " " . $this->arreglo['apellidos'];
        return $this->subject('Comentario en página web MGP&TPS ')
            ->from(
                $this->arreglo['email'],
                "Comenatrio de la página web"
            )
            ->replyTo($this->arreglo['email'], $nombre)->view('correos.platilla');
    }
}
