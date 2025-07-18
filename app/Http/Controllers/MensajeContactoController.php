<?php

namespace App\Http\Controllers;
use App\Mail\ContactoRecibido;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\MensajeContactoRequest;
use App\Models\MensajeContacto;

use Illuminate\Http\Request;





class MensajeContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
{
    $mensajes = \App\Models\MensajeContacto::latest()->paginate(10);
    return view('emails.mensajes', compact('mensajes'));
}

    

    
    

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    MensajeContacto::create($validated);

    // Enviar el correo
    Mail::to('paulajgarcia68@gmail.com')->send(new ContactoRecibido($validated));

    return back()->with('success', 'Tu mensaje ha sido guardado y enviado correctamente.');
}

    

    

public function enviarFormulario(Request $request)
{
    $datos = $request->all();

    Mail::to('tu_correo@gmail.com')->send(new ContactoRecibido($datos));

    return redirect()->back()->with('mensaje', 'Formulario enviado');
}

public function markAsRead($id)
{
    $mensaje = MensajeContacto::findOrFail($id);
    $mensaje->is_read = true;
    $mensaje->save();

    return redirect()->back()->with('success', 'Mensaje marcado como leído.');
}
    
}
