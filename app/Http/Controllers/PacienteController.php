<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\User;
use App\Models\Historial;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::with('user')->get();
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
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'celular' => 'required',
            'direccion' => 'required',
            'grupo_sanguineo' => 'required',
            'contacto_emergencia' => 'nullable',
            'observaciones' => 'nullable',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|max:250|confirmed',  

       ]);

       $usuario = new User();
        $usuario->name = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $paciente = new Paciente();

        $paciente->user_id = $usuario->id;
        

        $paciente->nombres          = $request->nombres;
        $paciente->apellidos        = $request->apellidos;
        $paciente->dni               = $request->dni;
        $paciente->obra_social      = $request->obra_social;
        $paciente->nro_seguro       = $request->nro_seguro;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero           = $request->genero;
        $paciente->celular          = $request->celular;
        $paciente->direccion        = $request->direccion;
        $paciente->grupo_sanguineo  = $request->grupo_sanguineo;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
        $paciente->observaciones    = $request->observaciones;

        $paciente->save();
        $usuario->assignRole('paciente');
        

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
        $paciente = Paciente::with('user')->findOrFail($id);
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
            'fecha_nacimiento' => 'required',
            'genero'     => 'required',
            'celular'    => 'required',
            'direccion'  => 'required',
                     
            'grupo_sanguineo' => 'required',
            
            'contacto_emergencia' => 'required',
            'observaciones' => 'required',
            'email' => 'required|max:250|unique:users,email,'.$paciente->user->id,
            'password' =>'nullable|max:250|confirmed',
                

       ]); 

       $paciente->nombres          = $request->nombres;
        $paciente->apellidos        = $request->apellidos;
        $paciente->dni              = $request->dni;
        $paciente->obra_social       = $request->obra_social;
        $paciente->nro_seguro       = $request->nro_seguro;
              
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero           = $request->genero;
        $paciente->celular          = $request->celular;
        $paciente->direccion        = $request->direccion;
        $paciente->grupo_sanguineo  = $request->grupo_sanguineo;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
        $paciente->observaciones    = $request->observaciones;

        $usuario = User::find($paciente->user->id);

        $usuario->name = $request->nombres;
        $usuario->email = $request->email;

        if($request->filled('password')){
            $usuario->password = Hash::make($request['password']);
         

        }
            $usuario->save();

            return redirect()->route('admin.pacientes.index')
        
        ->with('mensaje', 'Se actualizó al paciente') 
        ->with('icono', 'success'); 
    }

    public function confirmDelete($id){
       
        $paciente = Paciente::with('user')->FindOrFail($id);
        return view('admin.pacientes.delete',compact('paciente'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){

       $paciente = Paciente::find($id);

        //eliminar al usuario asociado

        $user = $paciente->user;
        $user->delete();

        //eliminar a la secretaria

        $paciente->delete();
        
        return redirect()->route('admin.pacientes.index')
        
        ->with('mensaje', 'Se eliminó al paciente') 
        ->with('icono', 'success'); 
        
        
    }

    
    
    public function mis_historiales()
{
    $user = Auth::user();
    $paciente = Paciente::where('user_id', $user->id)->first();

    if (!$paciente) {
        return redirect()->back()->with('error', 'No se encontró el paciente asociado al usuario.');
    }

    $filtro = request('filtro');

    if ($filtro === 'ultimo') {
        $historiales = Historial::where('paciente_id', $paciente->id)
            ->orderBy('created_at', 'desc')
            ->take(1)
            ->get();
    } else {
        $historiales = Historial::where('paciente_id', $paciente->id)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    return view('admin.pacientes.mis_historiales', compact('historiales'));
}

    
}
