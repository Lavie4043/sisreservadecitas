<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['nombres','apellidos','telefono','licencia_medica','especialidad','user_id'];

    public function consultorio(){
        return $this->BelongsTo(Consultorio::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }


    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}