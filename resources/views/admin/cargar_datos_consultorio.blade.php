

<table class="table table-bordered table-hover table-sm">
              <thead>
              <tr>
              <th>Hora</th>
              <th>Lunes</th>
              <th>Martes</th>
              <th>Miercoles</th>
              <th>Jueves</th>
              <th>Viernes</th>
              <th>Sabado</th>
              <th>Domingo</th>
               </tr>
            </thead>
            <tbody>
              
                @php
                  $horas = ['00:00:00 - 01:00:00', '01:00:00 - 02:00:00', '02:00:00 - 03:00:00', '03:00:00 - 04:00:00',
                  '04:00:00 - 05:00:00', '05:00:00 - 06:00:00', '06:00:00 - 07:00:00',
                  '07:00:00 - 08:00:00', '08:00:00 - 09:00:00', '09:00:00 - 10:00:00' , '10:00:00 - 11:00:00'
                  ,'11:00:00 - 12:00:00', '12:00:00 - 13:00:00', '13:00:00 - 14:00:00', '14:00:00 - 15:00:00',
                  '15:00:00 - 16:00:00', '16:00:00 - 17:00:00', '17:00:00 - 18:00:00', '18:00:00 - 19:00:00'
                  , '18:00:00 - 19:00:00', '19:00:00 - 20:00:00', '20:00:00 - 21:00:00', '21:00:00 - 22:00:00'
                  ,'22:00:00 - 23:00:00', '23:00:00 - 24:00:00'];
                  $diasSemana =['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];

                @endphp
                
                @foreach($horas as $hora)
                  @php
                    list($hora_inicio, $hora_fin) = explode(' - ',$hora);
                  @endphp
                
                <tr>
                  <td>{{$hora}}</td>
                  @foreach($diasSemana as $dia)
                  @php
                   $nombre_doctor = ' ';
                   foreach($horarios as $horario){
                    if(strtoupper(trim($horario->dia)) == strtoupper($dia) && 
                    strtotime($hora_inicio) >= strtotime($horario->hora_inicio) && 
                    strtotime($hora_fin) <= strtotime($horario->hora_fin)){
                      $nombre_doctor = $horario->doctor->nombres.' '.$horario->doctor->apellidos;
                      break;
                    }
                   }
                  @endphp
                  <td>{{$nombre_doctor}}</td>
                  @endforeach
                </tr>
                @endforeach
            </tbody>
            </table>
