@extends('layouts.admin')
@section('content')


<div class="container">
    <h2 class="mb-4">Mensajes de Contacto</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Título</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mensajes as $msg)
                <tr>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->subject }}</td>
                    <td>{{ $msg->message }}</td>
                    <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">No hay mensajes</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $mensajes->links() }}
</div>
@endsection