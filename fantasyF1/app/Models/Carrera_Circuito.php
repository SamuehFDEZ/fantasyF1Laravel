<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera_Circuito extends Model
{
    use HasFactory;

    protected $table = "carrera_circuitos"; //tabla fruto de la relacion N:M de circuito y pilotos

    // Una carrera pertenece a muchos circuitos
    public function circuito()
    {
        return $this->belongsTo(Circuito::class);
    }
    // Una carrera pertenece a muchos pilotos
    public function pilotos()
    {
        return $this->belongsTo(Piloto::class);
    }

}
