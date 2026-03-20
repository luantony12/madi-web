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
            'email'   => 'required|email|max:100',
            'phone'   => 'nullable|string|max:30',
            'type'    => 'nullable|string|max:100',
            'budget'  => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ], [
            'name.required'    => 'El nombre es obligatorio.',
            'email.required'   => 'El correo electrónico es obligatorio.',
            'email.email'      => 'Ingrese un correo electrónico válido.',
            'message.required' => 'El mensaje es obligatorio.',
        ]);

        // Enviar correo (configurar MAIL_* en .env)
        // Mail::to(config('mail.contact_to', 'proyectos@edilux.com.pe'))
        //     ->send(new ContactMail($validated));

        return back()
            ->with('success', '¡Gracias! Su solicitud fue enviada. Le contactaremos en menos de 24 horas.')
            ->withInput(['name' => '']);
    }
}
