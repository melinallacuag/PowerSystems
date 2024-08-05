<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {

      //  dd($request->all());

        $data = $request->validate([
            'nombres' => 'required|string|max:30',
            'apellidos' => 'required|string|max:50',
            'telefono' => 'required|digits:9',
            'ruc' => 'required|digits:11',
            'empresa' => 'required|string|max:100',
            'ciudad' => 'required|string|max:30',
            'correo' => 'required|email|max:100',
            'asunto' => 'required|string|max:200',
            'mensaje' => 'required|string|max:150',
        ]);

        Mail::to('comercial@sosfact.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('success', '¡Correo enviado correctamente!');

       // return response()->json(['message' => 'Correo enviado correctamente.']);
    }
}
