<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuito extends Model
{
    use HasFactory;

    protected $table = "circuitos";

    protected $fillable = [
        'ronda',
        'km',
        'fecha',
        'nombre',
        'num_vueltas',
        'num_curvas',
        'autor_RecordCircuito',
        'tiempo_RecordCircuito',
        'anyo_RecordCircuito',
        'DNF',
        'DriverOfTheDay',
        'Adelantamientos',
        'podiums',
        'vueltaRapida',
    ];


    // Muchos circuitos tienen (son corridos por) muchos pilotos (N:M)
    public function piloto()
    {
        return $this->belongsToMany(Piloto::class);
    }

    //Un circuito tiene un sprint (1:1)
    public function sprint()
    {
        return $this->hasOne(Sprint::class);
    }

    //Un circuito tiene muchas cualis (1:N)
    public function cuali()
    {
        return $this->hasMany(Cuali::class);
    }

}
