<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $guard_name = 'web';

    public function historial()
    {
        return $this->hasMany(Historial::class);
    }

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
