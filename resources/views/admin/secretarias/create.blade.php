@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Registro de un nuevo secretario/a</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Llene los datos </h3>
                </div>    
                    <div class="card-body">
                        <form action="{{url('/admin/secretarias/create')}}" method="POST">
                            @csrf
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre</label><b>*</b>
                                        <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" required>
                                        @error('nombres')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Apellido</label><b>*</b>
                                        <input type="text" value="{{old('apellidos')}}" name="apellidos" class="form-control" required>
                                        @error('apellidos')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Celular</label><b>*</b>
                                        <input type="number" value="{{old('celular')}}" name="celular" class="form-control" required>
                                        @error('celular')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                                 
                            </div> 
                            
                            
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">DNI</label><b>*</b>
                                        <input type="number" value="{{old('dni')}}" name="dni" class="form-control" required>
                                        @error('dni')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Fecha de nacimiento</label><b>*</b>
                                        <input type="date" value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento" class="form-control" required>
                                        @error('fecha_nacimiento')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Domicilio</label><b>*</b>
                                        <input type="address" value="{{old('direccion')}}" name="direccion" class="form-control" required>
                                        @error('direccion')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                </div>
                                  
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Email</label><b>*</b>
                                        <input type="email" value="{{old('email')}}" name="email" class="form-control" required>
                                        @error('email')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror

                                    </div>
                                </div>   
                            

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Password</label><b>*</b>
                                        <input type="password" value="{{old('password')}}" name="password" class="form-control" required>
                                        @error('password')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   
                            
                            <br>

                            
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Password verificación</label><b>*</b>
                                        <input type="password" value="{{old('password_confirmation')}}"name="password_confirmation" class="form-control" required>
                                        @error('password_confirmation')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>      
                            </div> 

                            
                        <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form group">
                                        <a href="{{url('admin/secretarias')}}"class="btn btn-secondary">Volver</a>
                                        <button type="submit" class="btn btn-primary">Registrar secretario/a</button>
                                        
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