@extends('layouts.admin')
@section('content')
  <div class="row"> 
    
    <h1>Listado de Pacientes</h1>
  </div>
  <hr>

  <div class="row"> 
  <div class="col-md-12">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Pacientes registrados</h3>
<div class="card-tools">
<a href="{{url('admin/pacientes/create')}}"class="btn btn-primary">
  Nuevo Registro
</a>
</div>

</div>

<div class="card-body">
  
<table id="example1" class="table table-bordered table-hover table-sm">
    <thead style="background-color: #c0c0c0"> 
    
      <tr>
        <td style="text-align:center"><b>N°</b></td>
        <td style="text-align:center"><b>Nombre y Apellido</b></td>
        <td style="text-align:center"><b>DNI</b></td>
        <td style="text-align:center"><b>Obra social</b></td>
        <td style="text-align:center"><b>N° de obra social</b></td>
        <td style="text-align:center"><b>Fecha de nacimiento</b></td>
        
        
        <td style="text-align:center"><b>Celular</b></td>
          <td style="text-align:center"><b>Dirección</b></td>
        <td style="text-align:center"><b>Email</b></td>
        <td style="text-align:center"><b>Contacto</b></td>
      
        

        <td style="text-align:center"><b>Acciones</b></td>
        
      </tr>
    </thead> 
    <tbdy>
      <?php $contador=1; ?>
  @foreach($pacientes as $paciente)
  
  
    <tr>
      <td style="text-align:center">{{$contador++}}</td>

      <td>{{$paciente->nombres}} {{$paciente->apellidos}}</td>
      <td>{{$paciente->dni}}</td>
      <td>{{$paciente->obra_social}}</td>
      <td>{{$paciente->nro_seguro}}</td>
      <td>{{$paciente->fecha_nacimiento}}</td>
      
      <td>{{$paciente->celular}}</td>
      
      <td>{{$paciente->direccion}}</td>
      <td>{{$paciente->user->email}}</td>
      <td>{{$paciente->contacto_emergencia}}</td>
      


      
      
      <td style="text-align: center">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{url('admin/pacientes/'.$paciente->id)}}" type="button" class="btn btn-info btn-sm">Ver<i class="bi bi-eye"></i> </a>
        
            <a href="{{url('admin/pacientes/'.$paciente->id.'/edit')}}" class="btn btn-success btn-sm">Editar<i class="bi bi-pencil"></i></a>
            <a href="{{url('admin/pacientes/'.$paciente->id.'/confirm-delete')}}" class="btn btn-danger btn-sm">Borrar<i class="bi bi-trash"></i></a>
          </div>
        
      </td>
</tr>
    @endforeach

</table>
<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                "infoEmpty": "Mostrando 0 a 0 de 0 ",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                "infoFiltered": "(Filtrado de _MAX_ total )",
                "infoPostFix": "",
                "thousands": ",",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Pacientes",
                "lengthMenu": "Mostrar _MENU_ ",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
</div>

</div>

</div>

  
  </div>
@endsection
