@extends('layouts.admin')
@section('content')
  <div class="row"> 
    
    <h1>Listado de Horarios</h1>
  </div>
  <hr>

  <div class="row"> 
  <div class="col-md-12">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Horarios registrados</h3>
<div class="card-tools">
<a href="{{url('admin/horarios/create')}}"class="btn btn-primary">
  Nuevo Registro
</a>
</div>

</div>

<div class="card-body">
  
<table id="example1" class="table table-bordered table-hover table-sm">
    <thead style="background-color: #c0c0c0"> 
    
      <tr>
        <td style="text-align:center"><b>N°</b></td>
        <td style="text-align:center"><b>Doctor</b></td>
        <td style="text-align:center"><b>Especialidad</b></td>
        <td style="text-align:center"><b>Consultorio</b></td>
        
        <td style="text-align:center"><b>Día de atención</b></td>
        <td style="text-align:center"><b>hora_inicio</b></td>
        <td style="text-align:center"><b>hora_fin</b></td>
        <td style="text-align:center"><b>Acciones</b></td>
        
      </tr>
    </thead> 
    <tbdy>
      <?php $contador=1; ?>
  @foreach($horarios as $horario)
  
  
    <tr>
      <td style="text-align:center">{{$contador++}}</td>

      <td>{{$horario->doctor->nombres}} {{$horario->doctor->apellidos}}</td>
      <td>{{$horario->doctor->especialidad}}</td>
      <td>{{$horario->consultorio->nombre." -- ".$horario->consultorio->ubicacion}}</td>
      
      <td>{{$horario->dia}}</td>
      <td>{{$horario->hora_inicio}}</td>
      <td>{{$horario->hora_fin}}</td>
      
      
      
      
      
      <td style="text-align: center">
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{url('admin/horarios/'.$horario->id)}}" type="button" class="btn btn-info btn-sm">Ver<i class="bi bi-eye"></i> </a>
        
            <a href="{{url('admin/horarios/'.$horario->id.'/edit')}}" class="btn btn-success btn-sm">Editar<i class="bi bi-pencil"></i></a>
            <a href="{{url('admin/horarios/'.$horario->id.'/confirm-delete')}}" class="btn btn-danger btn-sm">Borrar<i class="bi bi-trash"></i></a>
          </div>
        
      </td>
</tr>
    @endforeach

</table>
<hr>
<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Horarios",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Horarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 ",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Horarios",
                "infoFiltered": "(Filtrado de _MAX_ total )",
                "infoPostFix": "",
                "thousands": ",",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Horarios",
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


<br>
<div class="row">
  <div class="col-md-12">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Calendario de atención doctores</h3>
        
      
      </div>
      <div class="row">
                                <div class="col-md-12">
                                <div class="form group">
                                        <label for="">Consultorios</label><b></b>
                                        <select name="consultorio_id" id="consultorio_select" class="form-control">
                                            <option value="">Seleccione un consultorio</option>
                                            @foreach ($consultorios as $consultorio)
                                                <option value="{{ $consultorio->id }}">{{ $consultorio->nombre." ".$consultorio->ubicacion }}</option>
                                            @endforeach

                                            

                                            
                                        </select>

           </div>
                                
        </div>

        <hr>

         <script>
    $('#consultorio_select').on('change', function(){
      var consultorio_id = $('#consultorio_select').val();
        //alert(consultorio_id);
        var url ="{{route('admin.horarios.cargar_datos_consultorios',':id')}}";
        url = url.replace(':id', consultorio_id);
        if(consultorio_id){
          $.ajax({
            url: url,
            type: 'GET',
            success:function(data){
              $('#consultorio_info').html(data);
            },
            error:function(){
              alert('Error al obtener los datos del consultorio');
            }
          });

        }else{
          $('#consultorio_info').html('');
        }
    });
</script>
<div id="consultorio_info">
  </div>
  <hr>


          
      
 


 
     </div>
     </div>
     </div>
     </div>
    



@endsection

