<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = ['cita_id','motivo','diagnostico','observaciones'];

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }

    public function tratamientos()
    {
        return $this->hasMany(Tratamiento::class);
    }
}
