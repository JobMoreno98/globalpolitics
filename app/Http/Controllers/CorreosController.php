<?php

namespace App\Http\Controllers;

use App\Mail\EnviarCorreos;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class CorreosController extends Controller
{
    public function enviar_comenatrio(Request $request)
    {

        $array = [
            "nombre" => $request->nombre[0],
            'apellidos' => $request->nombre[1],
            'especialidad' => $request->especialidad,
            'email' => $request->email,
            'mensaje' => $request->mensaje
        ];

        Mail::to('job.moreno@administrativos.udg.mx')->send(new EnviarCorreos($array));
        return $request;
    }
}
