@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Modificar Historial Clínico</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"> Llene los datos </h3>
                </div>    
                    <div class="card-body">
                        <form action="{{url('/admin/historial', $historial->id)}}" method="POST">
                            @csrf
                            @method('PUT')

     <div class="row">
    <div class="col-md-8">  
        <div class="form-group">
            <label for="">Paciente</label><b>*</b>
            <select name="paciente_id" id="" class="form-control" required>
                <option value="">Seleccione un Paciente</option>
                @foreach($pacientes as $paciente)
                    <option value="{{$paciente->id}}" {{$historial->paciente->id == $paciente->id ?'selected':''}}>{{$paciente->apellidos." " . $paciente->nombres}}</option>
                @endforeach
            </select>
        </div>
    </div>                           
          <br>                                                      
<div class="row">
    <div class="col-md-4">  
        <div class="form-group">
            <label for="">Fecha</label><b>*</b>
            <input type="date" value="{{$historial->fecha_visita}}" name="fecha_visita" class="form-control">
            @error('fecha_visita')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Motivo consulta</label><b>*</b>
            <textarea name="motivo_consulta" class="form-control" cols="5" rows="5" style="width:100%" required>{{ $historial->motivo_consulta }}</textarea>
            @error('motivo_consulta')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Diagnóstico</label><b>*</b>
            <textarea name="diagnostico" class="form-control" id="diagnostico" cols="5" rows="5" style= "width:100%" required>{{ $historial->motivo_consulta }}</textarea> 
            @error('diagnostico')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tratamiento</label><b></b>
            <textarea name="tratamiento" class="form-control" id="tratamiento" cols="5" rows="5" style= "width:100%" >{{ $historial->tratamiento }}</textarea> 
            @error('tratamiento')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>


                                

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Exámenes</label><b></b>
            <textarea name="examenes" class="form-control" id="examenes" cols="5" rows="5" style= "width:100%" >{{ $historial->examenes }}</textarea> 
            @error('examenes')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Receta</label><b></b>
            <textarea name="receta" class="form-control" id="receta" cols="5" rows="5" style= "width:100%" >{{ $historial->receta }}</textarea> 
            @error('receta')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Indicaciones</label><b></b>
            <textarea name="indicaciones" class="form-control" id="indicaciones" cols="5" rows="5" style= "width:100%" >{{ $historial->indicaciones }}</textarea> 
            @error('indicaciones')
                <small style="color:red">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="">Observaciones</label><b></b>
            <textarea name="observaciones" class="form-control" id="observaciones" cols="5" rows="5" style= "width:100%" >{{ $historial->observaciones}}</textarea> 
            @error('observaciones')
                <small style="color:red">{{ $message }}</small>
            @enderror
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
                                        <button type="submit" class="btn btn-success">Actualizar</button>
                                        
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
                            
                            
                 