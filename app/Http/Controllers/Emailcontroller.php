<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class Emailcontroller extends Controller
{
    public function __construc()
    {
        $this->middleware('auth');
    }

    public function enviar(Request $request, $numero)
    {
        $user = $request->user;
        $correo = New Emailbienvenida($user, $numero);

        Mail::to($user)->send($correo);

        return "Se envio un correo a su cuenta de manera correcta.";
    }

}
