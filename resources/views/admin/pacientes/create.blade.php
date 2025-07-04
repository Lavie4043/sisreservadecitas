@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Registro de un nuevo paciente</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Llene los datos </h3>
                </div>    
                    <div class="card-body">
                        <form action="{{url('/admin/pacientes/create')}}" method="POST">
                            @csrf
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres</label><b>*</b>
                                        <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" required>
                                        @error('nombres')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellidos</label><b>*</b>
                                        <input type="text" value="{{old('apellidos')}}" name="apellidos" class="form-control" required>
                                        @error('apellidos')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">DNI</label><b>*</b>
                                        <input type="number" value="{{old('dni')}}" name="dni" class="form-control" required>
                                        @error('dni')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                </div>

                                                    
                            
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Obra social</label><b>*</b>
                                        <input type="text" value="{{old('obra_social')}}" name="obra_social" class="form-control" required>
                                        @error('obra_social')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Número Obra social</label><b>*</b>
                                        <input type="number" value="{{old('nro_seguro')}}" name="nro_seguro" class="form-control" required>
                                        @error('nro_seguro')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label><b>*</b>
                                        <input type="date" value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento" class="form-control" required>
                                        @error('fecha_nacimiento')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
 

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Género</label>
                                        <select name="genero" id="" class="form-control">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="No binario">No binario</option>
                                        </select>
                                        
                                    </div>
                                </div>

                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Grupo sanguíneo</label>
                                        <select name="grupo_sanguineo" id="" class="form-control">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="0+">0+</option>
                                            <option value="O-">O-</option>
                                            <option value="Desconocido">Desconocido</option>
                                            
                                        </select>
                                        
                                    </div>
                                </div>
                                

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Domicilio</label><b>*</b>
                                        <input type="text" value="{{old('direccion')}}" name="direccion" class="form-control" required>
                                        @error('direccion')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
 <br>                               

                                <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Celular</label><b>*</b>
                                        <input type="number" value="{{old('celular')}}" name="celular" class="form-control" required>
                                        @error('celular')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                                  
                                
                                

                                

                                
                                

                                                          
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Contacto de emergencia</label><b></b>
                                        <input type="text" value="{{old('contacto_emergencia')}}" name="contacto_emergencia" class="form-control">
                                        @error('contacto_emergencia')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                

                                
                                
                                

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Observaciones</label><b></b>
                                        <input type="text" value="{{old('observaciones')}}" name="observaciones" class="form-control">
                                        @error('observaciones')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                            

    
    <div class="col-md-4 mb-3">
        <div class="form-group">
            <label for="">Email</label><b>*</b>
            <input type="email" value="{{ old('email') }}" name="email" class="form-control" required>
            @error('email')
                <small style="color:red;">{{ $message }}</small>
            @enderror
        </div>
    </div>
    

    <div class="col-md-4 mb-3">
        <div class="form-group">
            <label for="">Contraseña</label><b>*</b>
            <input type="password" value="{{ old('password') }}" name="password" class="form-control" required>
            @error('password')
                <small style="color:red;">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="form-group">
            <label for="">Repetir Contraseña</label><b>*</b>
            <input type="password" name="password_confirmation" class="form-control" required>
            @error('password_confirmation')
                <small style="color:red;">{{ $message }}</small>
            @enderror
        </div>
    </div>
    


                                
                             

          

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="{{url('admin/pacientes')}}"class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-primary">Registrar paciente</button>
                                        
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
