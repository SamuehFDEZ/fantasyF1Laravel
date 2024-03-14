<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuito extends Model
{
    use HasFactory;

    protected $table = "circuitos";


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
