@extends('layouts.admin')
@section('content')

<div class="container mt-5" style="max-width: 600px;">
    <h2 class="mb-4 text-center">Formulario de Contacto</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contacto.enviar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Tu nombre" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Tu email" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="subject" placeholder="Asunto" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Escribí tu mensaje aquí..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Enviar mensaje 💌</button>
    </form>
</div>



    
@endsection