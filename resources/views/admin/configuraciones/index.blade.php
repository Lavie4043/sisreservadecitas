@extends('layouts.admin')
@section('content')
  <div class="row"> 
    
    <h1>Listado de Configuraciones</h1>
  </div>
  <hr>

  <div class="row"> 
  <div class="col-md-12">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Configuraciones registradas</h3>
<div class="card-tools">
<a href="{{url('admin/configuraciones/create')}}"class="btn btn-primary">
  Nuevo Registro
</a>
</div>

</div>

<div class="card-body">
  
<table id="example1" class="table table-bordered table-hover table-sm">
    <thead style="background-color: #c0c0c0"> 
    
      <tr>
        <td style="text-align:center"><b>N°</b></td>
        <td style="text-align:center"><b>Clínica</b></td>
        <td style="text-align:center"><b>Dirección</b></td>
        <td style="text-align:center"><b>Teléfono</b></td>
        <td style="text-align:center"><b>Correo</b></td>
        <td style="text-align:center"><b>Logo</b></td>
       
        <td style="text-align:center"><b>Acciones</b></td>
        
      </tr>
    </thead> 
    <tbdy>
      <?php $contador=1; ?>
  @foreach($configuraciones as $configuracione)
  
  
    <tr>
      <td style="text-align:center">{{$contador++}}</td>

      <td>{{$configuracione->nombre}}</td>
      <td>{{$configuracione->direccion}}</td>
      <td>{{$configuracione->telefono}}</td>
      <td>{{$configuracione->correo}}</td>
      <td>
          
            <img src="{{asset('storage/'.$configuracione->logo)}}" alt="Logo" width="100" height="100">
          
           
      </td>
      
      
      
      
      
      <td style="text-align: center">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{url('admin/configuraciones/'.$configuracione->id)}}" type="button" class="btn btn-info btn-sm">Ver<i class="bi bi-eye"></i> </a>
        
            <a href="{{url('admin/configuraciones/'.$configuracione->id.'/edit')}}" class="btn btn-success btn-sm">Editar<i class="bi bi-pencil"></i></a>
            <a href="{{url('admin/configuraciones/'.$configuracione->id.'/confirm-delete')}}" class="btn btn-danger btn-sm">Borrar<i class="bi bi-trash"></i></a>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Configuraciones",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Configuraciones",
                "infoEmpty": "Mostrando 0 a 0 de 0 ",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Configuraciones",
                "infoFiltered": "(Filtrado de _MAX_ total )",
                "infoPostFix": "",
                "thousands": ",",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Configuraciones",
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