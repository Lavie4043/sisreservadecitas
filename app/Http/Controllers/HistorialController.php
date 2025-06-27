<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use App\Models\Paciente;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historiales = Historial::with('paciente','doctor')->get();
        return view('admin.historial.index',compact('historiales'));
            
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $pacientes = Paciente::orderBy('apellidos','asc')->get();
        return view('admin.historial.create',compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = $request->all();
        //return response()->json($datos);
        $historial = new Historial();
       
        $historial->fecha_visita = $request->fecha_visita;
        $historial->motivo_consulta = $request->motivo_consulta;
        $historial->diagnostico = $request->diagnostico;
        $historial->tratamiento = $request->tratamiento;
        $historial->examenes = $request->examenes;
        
        $historial->receta = $request->receta;
        $historial->indicaciones = $request->indicaciones;
        $historial->observaciones = $request->observaciones;        

        $historial->paciente_id = $request->paciente_id;
        $historial->doctor_id = Auth::user()->doctor->id;

        $historial->save();

        return redirect()->route('admin.historial.index')
        
        ->with('mensaje', 'Se creó el historial correctamente') 
        ->with('icono', 'success'); 
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $historial = Historial::find($id);
        return view('admin.historial.show', compact('historial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $historial = Historial::find($id);
        $pacientes = Paciente::orderBy('apellidos','asc')->get();
        return view('admin.historial.edit', compact('historial', 'pacientes'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //$datos = $request->all();
        //return response()->json($datos);

        $historial = Historial::find($id);
       
        $historial->fecha_visita = $request->fecha_visita;
        $historial->motivo_consulta = $request->motivo_consulta;
        $historial->diagnostico = $request->diagnostico;
        $historial->tratamiento = $request->tratamiento;
        $historial->examenes = $request->examenes;
        
        $historial->receta = $request->receta;
        $historial->indicaciones = $request->indicaciones;
        $historial->observaciones = $request->observaciones;        

        $historial->paciente_id = $request->paciente_id;
        $historial->doctor_id = Auth::user()->doctor->id;

        $historial->save();

        return redirect()->route('admin.historial.index')
        
        ->with('mensaje', 'Se actualizó el historial correctamente') 
        ->with('icono', 'success'); 
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historial $historial)
    {
        //
    }
}
