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
                <th>Acciones</th>

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
                <td>
    @if(!$msg->is_read)
        <form action="{{ route('mensajes.markAsRead', $msg->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn btn-sm btn-success">📖 Marcar como leído</button>
        </form>
    @else
        <span class="badge bg-secondary">Leído</span>
    @endif
</td>
                
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