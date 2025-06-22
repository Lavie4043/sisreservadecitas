@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Datos de la configuración</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"> Datos Registrados </h3>
                </div>    
                    <div class="card-body">
                        
                        
                        <div class="row">
                            <div class= "col-md-8">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Nombre de la Clínica</label><b>*</b>
                                        <p>{{$configuracion->nombre}}</p>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Direccion</label><b>*</b>
                                        <p>{{$configuracion->direccion}}</p>
                                    </div>
                                 </div> 
                                </div>
<br>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Teléfono</label><b>*</b>
                                        <p>{{$configuracion->telefono}}</p>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Correo</label><b>*</b>
                                        <p>{{$configuracion->correo}}</p>
                                    </div>
                                </div> 
                            </div>
                        </div>

                            <div class= "col-md-4">
                                <div class="form-group">
                                    <label for="">Logo</label><b></b>
                                    <p>
                                       
                                             <img src="{{asset('storage/'.$configuracion->logo)}}" alt="Logo" width="100" height="100">
                                        
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr>
          

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/configuraciones')}}"class="btn btn-secondary">Volver</a>
                                        
                                        
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
                            
                            
                 