@extends('layouts.admin')
@section('content')
  <div class="row"> 
    <h>
    <h1>Modificar secretario/a: {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
  </div>
  <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"> Llene los datos </h3>
                </div>    
                    <div class="card-body">
                        <form action="{{url('/admin/secretarias',$secretaria->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                         
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Nombre</label>
                                        <input type="text" value="{{$secretaria->nombres}}" name="nombres" class="form-control" required>
                                        @error('nombres')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Apellidos</label>
                                        <input type="text" value="{{$secretaria->apellidos}}" name="apellidos" class="form-control" required>
                                        @error('apellidos')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Celular</label>
                                        <input type="number" value="{{$secretaria->celular}}" name="celular" class="form-control" required>
                                        @error('celular')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                                 
                            </div> 
                            
                            
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">DNI</label>
                                        <input type="number" value="{{$secretaria->dni}}" name="dni" class="form-control" >
                                        @error('dni')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Fecha de nacimiento</label>
                                        <input type="date" value="{{$secretaria->fecha_nacimiento}}" name="fecha_nacimiento" class="form-control" required>
                                        @error('fecha_nacimiento')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Domicilio</label>
                                        <input type="address" value="{{$secretaria->direccion}}" name="direccion" class="form-control" required>
                                        @error('direccion')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                </div>
                                  
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Email</label>
                                        <input type="email" value="{{$secretaria->user->email}}" name="email" class="form-control" required>
                                        @error('email')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror

                                    </div>
                                </div>   
                            

                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Password</label><b>*</b>
                                        <input type="password" value="{{old('password')}}" name="password" class="form-control" >
                                        @error('password')
                                        <small style="color=red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>   
                            
                            <br>

                            
                                <div class="col-md-4">
                                    <div class="form group">
                                        <label for="">Password verificación</label><b>*</b>
                                        <input type="password" value="{{old('password_confirmation')}}"name="password_confirmation" class="form-control" >
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
