<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera_Cuali extends Model
{
    use HasFactory;

    protected $table = "carrera_cualis"; //tabla fruto de la relacion N:M de sprints y pilotos

    // Una carrera pertenece a muchos pilotos
    public function pilotos()
    {
        return $this->belongsTo(Piloto::class);
    }

    // Una carrera pertenece a muchas cualis
    public function cuali()
    {
        return $this->belongsTo(Cuali::class);
    }
}
