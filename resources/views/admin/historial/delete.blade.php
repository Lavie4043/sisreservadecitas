@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Paciente: {{$historial->paciente->apellidos." ".$historial->paciente->nombres}}</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Está seguro de eliminar este historial?</h3>
                </div>    
                    <div class="card-body">
                       <form action="{{url('/admin/historial',$historial->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            
          <br>                                                      
<div class="row">
    <div class="col-md-4">  
        <div class="form-group">
            <label for="">Fecha</label><b>*</b>
            <p>{{$historial->fecha_visita}}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Motivo consulta</label><b>*</b>
            <p>{{$historial->motivo_consulta}}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Diagnóstico</label><b>*</b>
               <p>{{$historial->diagnostico}}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tratamiento</label><b></b>
             <p>{{$historial->tratamiento}}</p>
        </div>
    </div>


                                

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Exámenes</label><b></b>
             <p>{{$historial->examenes}}</p>
        </div>
    </div>
    

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Receta</label><b></b>
             <p>{{$historial->receta}}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Indicaciones</label><b></b>
            <p>{{$historial->indicaciones}}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Observaciones</label><b></b>
            <p>{{$historial->observaciones}}</p>
        </div>
    </div>

                                

                                

                            
                                    
                                    

                                </div>
                            </div>
                        </div>

                        <hr>
          

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/historial')}}"class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        
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
                            
                            
                 