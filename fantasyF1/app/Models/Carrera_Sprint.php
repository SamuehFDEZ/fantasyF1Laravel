<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera_Sprint extends Model
{
    use HasFactory;

    protected $table = "carrera_sprints"; //tabla fruto de la relacion N:M de sprints y pilotos

    protected $fillable = [
        'num_piloto',
        'sprintID',
        'ronda',
        'tiempo',
        'posicion',
        'vueltas_hechas'
    ];

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }
    // Una carrera pertenece a muchos pilotos
    public function pilotos()
    {
        return $this->belongsTo(Piloto::class);
    }

}
