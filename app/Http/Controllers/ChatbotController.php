<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Historial;
use Illuminate\Support\Facades\Auth;

class ChatbotController extends Controller
{
    public function responder(Request $request)
    {
        $mensaje = strtolower($request->input('mensaje'));

        // Simulación básica
        if (str_contains($mensaje, 'diagnóstico')) {
            $pacienteId = Auth::user()->paciente->id ?? null;
            if (!$pacienteId) {
                return response()->json(['respuesta' => 'No se encontró el paciente.']);
            }

            $ultimo = Historial::where('paciente_id', $pacienteId)->latest()->first();
            return response()->json([
                'respuesta' => $ultimo
                    ? 'Tu último diagnóstico fue: ' . $ultimo->diagnostico
                    : 'No se encontraron historiales.'
            ]);
        }

        return response()->json(['respuesta' => 'Lo siento, no entiendo tu consulta.']);
    }
}