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
        $mensajes = MensajeContacto::latest()->paginate(10);
        return view('admin.mensajes.index', compact('mensajes'));

    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    

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
    /**
     * Display the specified resource.
     */
    public function show(MensajeContacto $mensajeContacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MensajeContacto $mensajeContacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MensajeContacto $mensajeContacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MensajeContacto $mensajeContacto)
    {
        //
    }

public function enviarFormulario(Request $request)
{
    $datos = $request->all();

    Mail::to('tu_correo@gmail.com')->send(new ContactoRecibido($datos));

    return redirect()->back()->with('mensaje', 'Formulario enviado');
}
    
}
