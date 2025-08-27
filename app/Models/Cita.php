<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['paciente_id','empleado_id','fecha_hora','estado','notas'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function consulta()
    {
        return $this->hasOne(Consulta::class);
    }
}
