<?php
namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all;
        //return response()->json($datos);

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|unique:pacientes',
            'obra_social' => 'required',
            'nro_seguro' => 'required:pacientes',
            'celular' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'correo' => 'required|max:250|unique:pacientes',
            'grupo_sanguineo' => 'required',
            'alergias' => 'required',
            'contacto_emergencia' => 'required',
            'observaciones' => 'required',
                

       ]);

        $paciente = new Paciente();

        $paciente->nombres          = $request->nombres;
        $paciente->apellidos        = $request->apellidos;
        $paciente->dni               = $request->dni;
        $paciente->obra_social      = $request->obra_social;
        $paciente->nro_seguro       = $request->nro_seguro;
        $paciente->celular          = $request->celular;
        $paciente->direccion        = $request->direccion;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero           = $request->genero;
        $paciente->correo           = $request->correo;
        $paciente->grupo_sanguineo  = $request->grupo_sanguineo;
        $paciente->alergias         = $request->alergias;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
       
        $paciente->observaciones    = $request->observaciones;

        $paciente->save();
        

        return redirect()->route('admin.pacientes.index')
        
        
        ->with('mensaje', 'Se registró al paciente') 
        ->with('icono', 'success'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.show',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.edit',compact('paciente'));
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        $request->validate([
            'nombres'    => 'required',
            'apellidos'  => 'required',
            'dni'         => 'required|unique:pacientes,dni,'.$paciente->id,
            'obra_social' => 'required',
            'nro_seguro' => 'required',
            'celular'    => 'required',
            'direccion'  => 'required',
            'fecha_nacimiento' => 'required',
            'genero'     => 'required',
            'correo'     => 'required|max:250|unique:pacientes,correo,'.$paciente->id,
            'grupo_sanguineo' => 'required',
            'alergias'   => 'required',
            'contacto_emergencia' => 'required',
            
            'observaciones' => 'required',
                

       ]); 

       $paciente->nombres          = $request->nombres;
        $paciente->apellidos        = $request->apellidos;
        $paciente->dni              = $request->dni;
        $paciente->obra_social       = $request->obra_social;
        $paciente->nro_seguro       = $request->nro_seguro;
        $paciente->celular          = $request->celular;
        $paciente->direccion        = $request->direccion;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero           = $request->genero;
        $paciente->correo           = $request->correo;
        $paciente->grupo_sanguineo  = $request->grupo_sanguineo;
        $paciente->alergias         = $request->alergias;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
        
        $paciente->observaciones    = $request->observaciones;

        $paciente->save();
        return redirect()->route('admin.pacientes.index')
        
        
        ->with('mensaje', 'Se actualizó al paciente') 
        ->with('icono', 'success'); 
    }

    public function confirmDelete($id){
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.delete',compact('paciente'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){

        $paciente = Paciente::find($id);

       //eliminar al paciente

        $paciente->delete();
        
        return redirect()->route('admin.pacientes.index')
        
        ->with('mensaje', 'Se eliminó al paciente') 
        ->with('icono', 'success'); 
        
    }
}
