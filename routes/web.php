<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MensajeContactoController;
use App\Http\Controllers\ContactoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::post('/contacto', [MensajeContactoController::class, 'store'])->name('contacto.enviar');

Route::get('/contacto', function () {
    return view('contacto');
});



Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('index');




Route::get('/admin/ver_reservas/{id}', [App\Http\Controllers\AdminController::class, 'ver_reservas'])->name('ver_reservas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para el admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

Route::get('/admin/mensajes', [MensajeContactoController::class, 'index'])->name('admin.mensajes');


//Rutas para el admin configuraciones

Route::get('/admin/configuraciones', [App\Http\Controllers\ConfiguracioneController::class, 'index'])->name('admin.configuraciones.index')->middleware('auth','can:admin.configuraciones.index');

Route::get('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracioneController::class, 'create'])->name('admin.configuraciones.create')->middleware('auth','can:admin.configuraciones.create');

Route::post('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracioneController::class, 'store'])->name('admin.configuraciones.store')->middleware('auth','can:admin.configuraciones.store');

Route::get('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracioneController::class, 'show'])->name('admin.configuraciones.show')->middleware('auth','can:admin.configuraciones.show');

Route::get('/admin/configuraciones/{id}/edit', [App\Http\Controllers\ConfiguracioneController::class, 'edit'])->name('admin.configuraciones.edit')->middleware('auth','can:admin.configuraciones.edit');

Route::put('/admin/configuraciones/{id}', 
[App\Http\Controllers\ConfiguracioneController::class, 'update'])->name('admin.configuraciones.update')->middleware('auth','can:admin.configuraciones.update');

Route::get('/admin/configuraciones/{id}/confirm-delete', [App\Http\Controllers\ConfiguracioneController::class, 'confirmDelete'])->name('admin.configuraciones.confirmDelete')->middleware('auth','can:admin.configuraciones.confirmDelete');


Route::delete('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracioneController::class, 'destroy'])->name('admin.configuraciones.destroy')->middleware('auth','can:admin.configuraciones.destroy'); 

//Rutas para el admin usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index')->middleware('auth','can:admin.usuarios.index');

Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.usuarios.create')->middleware('auth','can:admin.usuarios.create');

Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.usuarios.store')->middleware('auth','can:admin.usuarios.store');

Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.usuarios.show')->middleware('auth','can:admin.usuarios.show');

Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.usuarios.edit')->middleware('auth','can:admin.usuarios.edit');

Route::put('/admin/usuarios/{id}', 
[App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.usuarios.update')->middleware('auth','can:admin.usuarios.update');

Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UsuarioController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete')->middleware('auth','can:admin.usuarios.confirmDelete');

Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth','can:admin.usuarios.destroy'); 

//rutas para admin- secretaria

Route::get('/admin/secretarias', [App\Http\Controllers\SecretariaController::class, 'index'])->name('admin.secretarias.index')->middleware('auth','can:admin.secretarias.index');

Route::get('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'create'])->name('admin.secretarias.create')->middleware('auth','can:admin.secretarias.create');

Route::post('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'store'])->name('admin.secretarias.store')->middleware('auth','can:admin.secretarias.store');

Route::get('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'show'])->name('admin.secretarias.show')->middleware('auth','can:admin.secretarias.show');

Route::get('/admin/secretarias/{id}/edit', [App\Http\Controllers\SecretariaController::class, 'edit'])->name('admin.secretarias.edit')->middleware('auth','can:admin.secretarias.edit');

Route::put('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'update'])->name('admin.secretarias.update')->middleware('auth','can:admin.secretarias.update');

Route::get('/admin/secretarias/{id}/confirm-delete', [App\Http\Controllers\SecretariaController::class, 'confirmDelete'])->name('admin.secretarias.confirmDelete')->middleware('auth','can:admin.secretarias.confirmDelete');

Route::delete('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth','can:admin.secretarias.destroy');


//rutas para admin- pacientes

Route::get('/admin/pacientes', [App\Http\Controllers\PacienteController::class, 'index'])->name('admin.pacientes.index')->middleware('auth','can:admin.pacientes.index');

Route::get('/admin/pacientes/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('admin.pacientes.create')->middleware('auth');
Route::get('/admin/pacientes/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('admin.pacientes.create')->middleware('auth','can:admin.pacientes.create');

Route::post('/admin/pacientes/create', [App\Http\Controllers\PacienteController::class, 'store'])->name('admin.pacientes.store')->middleware('auth','can:admin.pacientes.store');

Route::get('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'show'])->name('admin.pacientes.show')->middleware('auth','can:admin.pacientes.show');

Route::get('/admin/pacientes/{id}/edit', [App\Http\Controllers\PacienteController::class, 'edit'])->name('admin.pacientes.edit')->middleware('auth','can:admin.pacientes.edit');

Route::put('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'update'])->name('admin.pacientes.update')->middleware('auth','can:admin.pacientes.update');

Route::get('/admin/pacientes/{id}/confirm-delete', [App\Http\Controllers\PacienteController::class, 'confirmDelete'])->name('admin.pacientes.confirmDelete')->middleware('auth','can:admin.pacientes.confirmDelete');

Route::delete('/admin/pacientes/{id}', [App\Http\Controllers\PacienteController::class, 'destroy'])->name('admin.pacientes.destroy')->middleware('auth','can:admin.pacientes.destroy');

//rutas para admin- consultorios

Route::get('/admin/consultorios', [App\Http\Controllers\ConsultorioController::class, 'index'])->name('admin.consultorios.index')->middleware('auth','can:admin.consultorios.index');

Route::get('/admin/consultorios/create', [App\Http\Controllers\ConsultorioController::class, 'create'])->name('admin.consultorios.create')->middleware('auth','can:admin.consultorios.create');

Route::post('/admin/consultorios/create', [App\Http\Controllers\ConsultorioController::class, 'store'])->name('admin.consultorios.store')->middleware('auth','can:admin.consultorios.store');

Route::get('/admin/consultorios/{id}', [App\Http\Controllers\ConsultorioController::class, 'show'])->name('admin.consultorios.show')->middleware('auth','can:admin.consultorios.show');

Route::get('/admin/consultorios/{id}/edit', [App\Http\Controllers\ConsultorioController::class, 'edit'])->name('admin.consultorios.edit')->middleware('auth','can:admin.consultorios.edit');

Route::put('/admin/consultorios/{id}', [App\Http\Controllers\ConsultorioController::class, 'update'])->name('admin.consultorios.update')->middleware('auth','can:admin.consultorios.update');

Route::get('/admin/consultorios/{id}/confirm-delete', [App\Http\Controllers\ConsultorioController::class, 'confirmDelete'])->name('admin.consultorios.confirmDelete')->middleware('auth','can:admin.consultorios.confirmDelete');

Route::delete('/admin/consultorios/{id}', [App\Http\Controllers\ConsultorioController::class, 'destroy'])->name('admin.consultorios.destroy')->middleware('auth','can:admin.consultorios.destroy');


//rutas para admin- doctores

Route::get('/admin/doctores', 
[App\Http\Controllers\DoctorController::class, 'index'])->name('admin.doctores.index')->middleware('auth','can:admin.doctores.index');

Route::get('/admin/doctores/create', [App\Http\Controllers\DoctorController::class, 'create'])->name('admin.doctores.create')->middleware('auth','can:admin.doctores.create');

Route::post('/admin/doctores/create', [App\Http\Controllers\DoctorController::class, 'store'])->name('admin.doctores.store')->middleware('auth','can:admin.doctores.store');

Route::get('/admin/doctores/{id}', [App\Http\Controllers\DoctorController::class, 'show'])->name('admin.doctores.show')->middleware('auth','can:admin.doctores.show');

Route::get('/admin/doctores/{id}/edit', [App\Http\Controllers\DoctorController::class, 'edit'])->name('admin.doctores.edit')->middleware('auth','can:admin.doctores.edit');

Route::put('/admin/doctores/{id}', [App\Http\Controllers\DoctorController::class, 'update'])->name('admin.doctores.update')->middleware('auth','can:admin.doctores.update');

Route::get('/admin/doctores/{id}/confirm-delete', [App\Http\Controllers\DoctorController::class,'confirmDelete'])->name('admin.doctores.confirmDelete')->middleware('auth','can:admin.doctores.confirmDelete');

Route::delete('/admin/doctores/{id}', [App\Http\Controllers\DoctorController::class,'destroy'])->name('admin.doctores.destroy')->middleware('auth','can:admin.doctores.destroy');


Route::get('/emails/mensajes/', [App\Http\Controllers\MensajeContactoController::class, 'index'])->name('emails.mensajes')->middleware('auth','can:emails.mensajes.index');
    
// Ruta mensaje leido

Route::patch('/emails/mensajes/{id}/read', [MensajeContactoController::class, 'markAsRead'])
    ->name('mensajes.markAsRead')
    ->middleware(['auth', 'can:emails.mensajes.index']);

// Ruta para enviar el formulario
Route::post('/contacto/enviar', [MensajeContactoController::class, 'store'])
    ->name('contacto.enviar');

// Ruta temporal









//rutas para admin- horarios

Route::get('/admin/horarios', 
[App\Http\Controllers\HorarioController::class,'index'])->name('admin.horarios.index')->middleware('auth','can:admin.horarios.index');    

Route::get('/admin/horarios/create', [App\Http\Controllers\HorarioController::class,'create'])->name('admin.horarios.create')->middleware('auth','can:admin.horarios.create');

Route::post('/admin/horarios/create', [App\Http\Controllers\HorarioController::class,'store'])->name('admin.horarios.store')->middleware('auth','can:admin.horarios.store');

Route::get('/admin/horarios/{id}', [App\Http\Controllers\HorarioController::class,'show'])->name('admin.horarios.show')->middleware('auth','can:admin.horarios.show');

Route::get('/admin/horarios/{id}/edit', [App\Http\Controllers\HorarioController::class,'edit'])->name('admin.horarios.edit')->middleware('auth','can:admin.horarios.edit');

Route::put('/admin/horarios/{id}', [App\Http\Controllers\HorarioController::class,'update'])->name('admin.horarios.update')->middleware('auth','can:admin.horarios.update');  

Route::get('/admin/horarios/{id}/confirm-delete', [App\Http\Controllers\HorarioController::class,'confirmDelete'])->name('admin.horarios.confirmDelete')->middleware('auth','can:admin.horarios.confirmDelete');

Route::delete('/admin/horarios/{id}', [App\Http\Controllers\HorarioController::class,'destroy'])->name('admin.horarios.destroy')->middleware('auth','can:admin.horarios.destroy');

///ajax para obtener los horarios de un doctor

Route::get('/admin/horarios/consultorios/{id}', [App\Http\Controllers\HorarioController::class, 'cargar_datos_consultorios'])->name('admin.horarios.cargar_datos_consultorios')->middleware('auth');

// Ajax Rutas para el usuario
Route::get('/consultorios/{id}', [App\Http\Controllers\WebController::class, 'cargar_datos_consultorios'])->name('cargar_datos_consultorio')->middleware('auth','can:admin.horarios.cargar_datos_consultorio');

Route::get('/cargar_reserva_doctores/{id}', [App\Http\Controllers\WebController::class, 'cargar_reserva_doctores'])->name('cargar_reserva_doctores')->middleware('auth','can:admin.cargar_reserva_doctores');


Route::get('/admin/ver_reservas/{id}', [App\Http\Controllers\AdminController::class, 'ver_reservas'])->name('ver_reservas')->middleware('auth','can:ver_reservas');


Route::post('/admin/eventos/create', [App\Http\Controllers\EventController::class, 'store'])->name('admin.eventos.create')->middleware('auth','can:admin.eventos.create');


Route::delete('/admin/eventos/destroy/{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('admin.eventos.destroy')->middleware('auth','can:admin.eventos.destroy');

//rutas para el historial clinico

Route::get('/admin/historial', 
[App\Http\Controllers\HistorialController::class, 'index'])->name('admin.historial.index')->middleware('auth','can:admin.historial.index');

Route::get('/admin/historial/create', [App\Http\Controllers\HistorialController::class, 'create'])->name('admin.historial.create')->middleware('auth','can:admin.historial.create');

Route::post('/admin/historial/create', [App\Http\Controllers\HistorialController::class, 'store'])->name('admin.historial.store')->middleware('auth','can:admin.historial.create');

Route::get('/admin/historial/pdf/{id}', [App\Http\Controllers\HistorialController::class, 'pdf'])->name('admin.historial.pdf')->middleware('auth','can:admin.historial.pdf');


Route::get('/admin/historial/{id}', [App\Http\Controllers\HistorialController::class, 'show'])->name('admin.historial.show')->middleware('auth','can:admin.historial.show');

Route::get('/admin/historial/{id}/edit', [App\Http\Controllers\HistorialController::class, 'edit'])->name('admin.historial.edit')->middleware('auth','can:admin.historial.edit');

Route::put('/admin/historial/{id}', [App\Http\Controllers\HistorialController::class, 'update'])->name('admin.historial.update')->middleware('auth','can:admin.historial.update');

Route::get('/admin/historial/{id}/confirm-delete', [App\Http\Controllers\HistorialController::class,'confirmDelete'])->name('admin.historial.confirmDelete')->middleware('auth','can:admin.historial.confirmDelete');

Route::delete('/admin/historial/{id}', [App\Http\Controllers\HistorialController::class,'destroy'])->name('admin.historial.destroy')->middleware('auth','can:admin.historial.destroy');

//ruta para el historial clinico del paciente


Route::get('/admin/pacientes/mis_historiales/{id}', [App\Http\Controllers\PacienteController::class, 'mis_historiales'])
    ->name('admin.pacientes.mis_historiales')
    ->middleware(['auth', 'can:admin.pacientes.mis_historiales']);



