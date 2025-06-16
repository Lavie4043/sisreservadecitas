@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Secretario/a: {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"> Datos registrados</h3>
                </div>    
                    <div class="card-body">
                        

                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre</label>
                                        <p>{{$secretaria->nombres}}</p>
                                        
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Apellidos</label>
                                        <p>{{$secretaria->apellidos}}</p>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Celular</label><b>*</b>
                                        <p>{{$secretaria->celular}}</p>
                                    </div>
                                </div>
                                                 
                            </div> 
                            
                            
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">DNI</label><b>*</b>
                                        <p>{{$secretaria->dni}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Fecha de nacimiento</label>
                                        <p>{{$secretaria->fecha_nacimiento}}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Domicilio</label>
                                        <p>{{$secretaria->direccion}}</p>
                                    </div>
                                </div>

                                </div>
                                  
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Email</label>
                                        <p>{{$secretaria->user->email}}</p>

                                    </div>
                                </div>   
                            

                                </div>   
                            
                                                       
                        <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/secretarias')}}"class="btn btn-secondary">Volver</a>
                                        
                                        
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