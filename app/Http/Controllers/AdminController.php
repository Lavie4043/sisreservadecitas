<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Secretaria;
use App\Models\Paciente; 
use App\Models\Consultorio;
use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_usuarios = User::count();
        $total_secretarias = Secretaria::count();
        $total_pacientes = Paciente::count();
        $total_consultorios = Consultorio::count();
        $total_doctores = Doctor::count();
        $total_horarios = Horario::count();
        $total_eventos = Event::count();

         $consultorios = Consultorio::all();
         $doctores = Doctor::all();
         $eventos = Event::all();
        return view('admin.index', compact('total_usuarios', 'total_secretarias', 'total_pacientes', 'total_consultorios', 'total_doctores', 'total_horarios', 'consultorios', 'doctores', 'eventos', 'total_eventos'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Logic to store data
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        return view('admin.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update data
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        // Logic to delete data
        return redirect()->route('admin.index');
    }

    public function ver_reservas($id)
    {
        $eventos = Event::where('user_id',$id)->get();
        return view('admin.ver_reservas', compact('eventos'));
    }
}
