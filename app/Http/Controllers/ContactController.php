<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'dni'     => 'required|digits:8',
            'phone'   => 'nullable|string|max:30',
            'email'   => 'required|email|max:100',
            'type'    => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ], [
            'name.required'    => 'El nombre es obligatorio.',
            'dni.required'     => 'El DNI es obligatorio.',
            'dni.digits'       => 'El DNI debe tener exactamente 8 dígitos.',
            'email.required'   => 'El correo electrónico es obligatorio.',
            'email.email'      => 'Ingrese un correo electrónico válido.',
            'message.required' => 'La descripción del proyecto es obligatoria.',
        ]);

        Mail::to(config('mail.to', env('MAIL_TO')))
            ->send(new ContactMail($validated));

        return back()->with('success', '¡Gracias! Su solicitud fue enviada. Le contactaremos en menos de 24 horas.');
    }
}