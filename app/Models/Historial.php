<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }


    protected $fillable = [
        'fecha_visita',
        'motivo_consulta',
        'diagnostico',
        'tratamiento',
        'examenes',
        'examenes_resultados',
        'receta',
        'indicaciones',
        'observaciones',
        'paciente_id',
        'doctor_id'
    ];
}
