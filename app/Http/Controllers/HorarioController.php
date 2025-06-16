<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Doctor;
use App\Models\Consultorio;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor', 'consultorio')->get();
        return view('admin.horarios.index', compact('horarios', 'consultorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor', 'consultorio')->get();
         return view('admin.horarios.create',compact('doctores', 'consultorios', 'horarios'));

         
    }

    public function cargar_datos_consultorios($id)
    {
        try{
            $horarios = Horario::with('doctor', 'consultorio')
                ->where('consultorio_id', $id)
                ->get();
                
                return view('admin.horarios.cargar_datos_consultorios', compact('horarios'));

        }catch(\Exception $excep){
            return response()->json(['mensaje' => 'Error']);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all;
       //return response()->json($datos);
       $request->validate([
           'dia'=>'required',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'consultorio_id' => 'required|exists:consultorios,id',
        ]);

        //Verificar si el horario ya existe
        $horarioExistente = Horario::where('dia', $request->dia)
            ->where('consultorio_id', $request->consultorio_id)
            ->where(function ($query) use ($request) {
                
                $query->where(function ($query) use ($request) {
                    $query->where('hora_inicio', '>=', $request->hora_inicio)
                          ->where('hora_inicio', '<', $request->hora_fin);
                })
                
            
            ->orWhere(function ($query) use ($request) {
                $query->where('hora_fin', '>', $request->hora_inicio)
                      ->where('hora_fin', '<=', $request->hora_fin);
            })
            ->orWhere(function ($query) use ($request) {
                $query->where('hora_inicio', '<', $request->hora_inicio)
                      ->where('hora_fin', '>', $request->hora_fin);
            });
            })
          
            ->exists();
        if ($horarioExistente) {
            return redirect()->back()
                ->with('mensaje', 'El horario ya existe para este día.')
                ->with('icono', 'error');
        }

        Horario::create($request->all());

        return redirect()->route('admin.horarios.index')
        ->with('mensaje', 'Horario creado exitosamente.')
         ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $horario = Horario::find($id);
        return view('admin.horarios.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
