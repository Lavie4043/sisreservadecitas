@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Paciente: {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"> Datos registrados </h3>
                </div>    
                    <div class="card-body">
                                                 
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre</label>
                                        <p>{{$paciente->nombres}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Apellidos</label>
                                        <p>{{$paciente->apellidos}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">DNI</label>
                                        <p>{{$paciente->dni}}</p>
                                    </div>
                                </div>
                                </div>
                                           
                            <div class="row">

                            <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Obra social</label>
                                        <p>{{$paciente->obra_social}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Número Obra social</label>
                                        <p>{{$paciente->nro_seguro}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Fecha de nacimiento</label>
                                        <p>{{$paciente->fecha_nacimiento}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Género</label>
                                        <p>{{$paciente->genero}}</p>
                                        
                                    </div>
                                </div>
                             
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Grupo sanguíneo</label>
                                        <p>{{$paciente->grupo_sanguineo}}</p>
                                        
                                    </div>
                                </div>   
                            

                             <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Domicilio</label>
                                        <p>{{$paciente->direccion}}</p>
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                            <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Celular</label>
                                        <p>{{$paciente->celular}}</p>
                                    </div>
                                </div>
                                                  
                                                                 
                            
                                                                                         
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Contacto de emergencia</label>
                                        <p>{{$paciente->contacto_emergencia}}</p>
                                    </div>
                                </div>

                                                                
                                
                                

                                

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Email</label>
                                        <p>{{$paciente->user->email}}</p>

                                    </div>
                                </div>   
                                </div>

                                <div class="col-md-8">
                                    <div class="form group">
                                        <label for="">Observaciones</label>
                                        <p>{{$paciente->observaciones}}</p>
                                    </div>
                                </div>
                             
<hr>
          

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/pacientes')}}"class="btn btn-secondary">Volver</a>
                                        
                                        
                                    </div>
                                </div>   
                            </div> 
                            

                        </div>
                
                </div>
                        
                </div>
            </div>

        </div>
    </div>
@endsection