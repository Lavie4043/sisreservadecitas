@extends('layouts.admin')
@section('content')
<div class="container">
    
<div class="card-body">
  



    
    <div class="row">
        <div class="col-md-12">
           @foreach ($historiales as $historial)

    <div class="row">
        <div class="col-md-12">
            <h3>Historial Médico del Paciente: {{$historial->paciente->nombres}}</h3>
        </div>

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
            <label for="">Observaciones</label>
            <p>{{ $historial->observaciones }}</p>
        </div>
    </div>


@endforeach 
<a href="{{url('home')}}"class="btn btn-secondary">Salir</a>
       

    

    
@endsection