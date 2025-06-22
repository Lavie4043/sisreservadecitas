@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Datos de la configuración</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title"> ¿Desea borrar los datos? </h3>
                </div>    
                    <div class="card-body">
                       <form action="{{ url('/admin/configuraciones/' . $configuracion->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                    @method('DELETE')
                        <div class="row">
                            <div class= "col-md-8">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Nombre de la Clínica</label><b></b>
                                        <input type="text" value="{{$configuracion->nombre}}" name="nombre" class="form-control" disabled>
                                        @error('nombre')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Direccion</label><b></b>
                                        <input type="address" value="{{$configuracion->direccion}}" name="direccion" class="form-control" disabled>
                                        @error('direccion')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                 </div> 
                                </div>
<br>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Teléfono</label><b></b>
                                        <input type="number" value="{{$configuracion->telefono}}" name="telefono" class="form-control" disabled>
                                        @error('telefono')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                    
                                        <label for="">Correo</label><b></b>
                                        <input type="email" value="{{$configuracion->correo}}" name="correo" class="form-control" disabled>
                                        @error('correo')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div> 
                            </div>
                        </div>

                            <div class= "col-md-4">
                                <div class="form-group">
                                    <label for="">Logo</label><b></b>
                                
                                    <br>
                                    <output id="list">
                                        
                                            <img class="thumb thumbnail" src="{{asset('storage/'.$configuracion->logo)}}" width="70%" title="{{ $configuracion->logo }}" />
                                        
                                    </output>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <hr>
          

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/configuraciones')}}"class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        
                                    </div>
                                </div>   
                            </div> 
                            </form>

                        </div>
                
                </div>
                        
                </div>
            </div>

        </div>
    </div>
@endsection
                            
                            
                 