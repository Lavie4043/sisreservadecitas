@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Datos del horario</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"> Horarios Registrados </h3>
                </div>    
                    <div class="card-body">
                        

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form group">
                                        <label for="">Doctores</label><b></b>
                                        <p>{{$horario->doctor->nombres." ".$horario->doctor->apellidos." - ".$horario->doctor->especialidad}}</p>
                                    </div>
                                </div>
                                

                                <div class="col-md-6">
                                    <div class="form group">
                                        <label for="">Consultorios</label><b></b>
                                        <p>{{$horario->consultorio->nombre." - ".$horario->consultorio->ubicacion}}</p>
                                    </div>
                                </div>
                            </div>

                            <br><br>
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Día</label><b></b>
                                        <p>{{$horario->dia}}</p>
                                        
                                        
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Hora Inicio</label><b></b>
                                          <p>{{$horario->hora_inicio}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Hora Final</label><b></b>
                                        
                                         <p>{{$horario->hora_fin}}</p>
                                    </div>
                                </div>
                                                 
                            </div> 
                            
                            
                                                   
                                

                                </div>
                                  
                                
                            

                                
                            
                            <br>

                            
                                
                            

                            
                        <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/doctores')}}"class="btn btn-secondary">Volver</a>
                                        
                                        
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