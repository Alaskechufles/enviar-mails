<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HablaCausa;

class UsuarioController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function enviarMail(Request $request)
    {
        $data = [
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'asunto' => $request->input('asunto'),
            'mensaje' => $request->input('mensaje'),
        ];

        $correo = new HablaCausa($data);

        Mail::to($data['correo'])->send($correo);

        return redirect("/contact");
    }
}
