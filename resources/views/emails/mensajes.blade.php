@extends('layouts.admin')
@section('content')

<div class="container mt-4" style="max-width: 900px;">
    <h3 class="mb-4 text-center">📥 Mensajes Recibidos</h3>

    <table class="table table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mensajes as $msg)
                <tr>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->subject }}</td>
                    <td>{{ Str::limit($msg->message, 60) }}</td>
                    <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay mensajes aún.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $mensajes->links() }}
    </div>
</div>

@endsection