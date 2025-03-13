<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        //Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        //Enviar el correo
        Mail::to('clusterceydt@gmail.com')->send(new ContactoMailable(
            $request->nombre,
            $request->apellido,
            $request->email,
            $request->asunto,
            $request->mensaje
        ));

        //Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', '¡Correo enviado con éxito!');
    }
}
