@extends('layouts.admin')
@section('content')
  <div class="row"> 
    
    <h1>Listado de Reservas</h1>
  </div>
  <hr>

  <div class="row"> 
  <div class="col-md-12">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Reservas registradas</h3>


</div>

<div class="card-body">
  
<table id="example1" class="table table-bordered table-hover table-sm">
    <thead style="background-color: #c0c0c0"> 
    
      <tr>
        <td style="text-align:center"><b>N°</b></td>
        <td style="text-align:center"><b>Doctor</b></td>
        <td style="text-align:center"><b>Especialidad</b></td>
        <td style="text-align:center"><b>Fecha de Reserva</b></td>
        <td style="text-align:center"><b>Hora de Reserva</b></td>
        <td style="text-align:center"><b>Fecha y hora de registro</b></td>
        <td style="text-align:center"><b>Acciones</b></td>
        
      </tr>
    </thead> 
    <tbdy>
      <?php $contador=1; ?>
  @foreach($eventos as $evento)
  
  
    <tr>
      <td style="text-align:center">{{$contador++}}</td>

      <td>{{$evento->doctor->nombres." ".$evento->doctor->apellidos}}</td>
      <td style="text-align:center">{{$evento->doctor->especialidad}}</td>
      <td style="text-align:center">{{\Carbon\Carbon::parse($evento->start)->format('Y-m-d')}}</td>
      <td style="text-align:center">{{\Carbon\Carbon::parse($evento->start)->format('H-i')}}</td>
      <td>{{$evento->created_at}}</td>
      
      
      
      
      
      
      <td style="text-align: center">
          <div class="btn-group" role="group" aria-label="Basic example">
           <a href="{{url('admin')}}"class="btn btn-secondary btn-sm">Volver</a> 
          <form action="{{url('/admin/eventos/destroy',$evento->id)}}" id="formulario{{$evento->id}}" onclick="preguntar{{$evento->id}} (event)" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">  
                    <i class="bi bi-trash">Borrar</i>
                </button>
          
          </form>
          <script>
            function preguntar{{$evento->id}}(event) {
                event.preventDefault();
                Swal.fire({
  title: "Está seguro de eliminar esta reserva?",
  text: "Si elimina esta reserva, otro usuario podrá reservar en ese horario",
  icon: "question",
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: "Eliminar",
  denyButtonText: "Cancelar",
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    var form = $('#formulario{{$evento->id}}');
    form.submit();
  } 
  
});
}
                
            
          </script>
                   
          
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
                "infoEmpty": "Mostrando 0 a 0 de 0 ",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
                "infoFiltered": "(Filtrado de _MAX_ total )",
                "infoPostFix": "",
                "thousands": ",",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
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