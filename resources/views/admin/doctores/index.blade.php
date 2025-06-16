@extends('layouts.admin')
@section('content')
  <div class="row"> 
    
    <h1>Listado de Doctores</h1>
  </div>
  <hr>

  <div class="row"> 
  <div class="col-md-12">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Doctores registrados</h3>
<div class="card-tools">
<a href="{{url('admin/doctores/create')}}"class="btn btn-primary">
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
        <td style="text-align:center"><b>Teléfono</b></td>
        <td style="text-align:center"><b>licencia_medica</b></td>
        
        <td style="text-align:center"><b>Especialidad</b></td>
        <td style="text-align:center"><b>Email</b></td>
        <td style="text-align:center"><b>Acciones</b></td>
        
      </tr>
    </thead> 
    <tbdy>
      <?php $contador=1; ?>
  @foreach($doctores as $doctore)
  
  
    <tr>
      <td style="text-align:center">{{$contador++}}</td>

      <td>{{$doctore->nombres}} {{$doctore->apellidos}}</td>
      <td>{{$doctore->telefono}}</td>
      <td>{{$doctore->licencia_medica}}</td>
      
      <td>{{$doctore->especialidad}}</td>
      <td>{{$doctore->user->email}}</td>
      
      
      
      
      <td style="text-align: center">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{url('admin/doctores/'.$doctore->id)}}" type="button" class="btn btn-info btn-sm">Ver<i class="bi bi-eye"></i> </a>
        
            <a href="{{url('admin/doctores/'.$doctore->id.'/edit')}}" class="btn btn-success btn-sm">Editar<i class="bi bi-pencil"></i></a>
            <a href="{{url('admin/doctores/'.$doctore->id.'/confirm-delete')}}" class="btn btn-danger btn-sm">Borrar<i class="bi bi-trash"></i></a>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Doctores",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Doctores",
                "infoEmpty": "Mostrando 0 a 0 de 0 ",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Doctores",
                "infoFiltered": "(Filtrado de _MAX_ total )",
                "infoPostFix": "",
                "thousands": ",",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Doctores",
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