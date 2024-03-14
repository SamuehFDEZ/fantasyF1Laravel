<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    use HasFactory;

    protected $table = "pilotos";


    //Uno o muchos pilotos pertenecen a un usuario (1:N)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    //Uno o muchos pilotos pertenecen a un constructor (1:N)
    public function constructor()
    {
        return $this->belongsTo(Constructor::class);
    }

    //Muchos pilotos tienen (corren en) muchos circuitos (N:M)
    public function circuito()
    {
        return $this->belongsToMany(Circuito::class);
    }

    //Muchos pilotos tienen (corren en) muchas cualis (N:M)
    public function cuali()
    {
        return $this->belongsToMany(Cuali::class);
    }
    //Muchos pilotos tienen (corren en) muchos sprints (N:M)
    public function sprint()
    {
        return $this->hasOne(Sprint::class);
    }

}
