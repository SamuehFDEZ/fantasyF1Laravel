<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuali extends Model
{
    use HasFactory;

    protected $table = "cualis";

    //Muchas cualis tienen (son corridas por) muchos pilotos (N:M)
    public function piloto()
    {
        return $this->belongsToMany(Piloto::class);
    }

    // Muchas cualis pertenecen a un circuito (1:N)
    public function circuito()
    {
        return $this->belongsTo(Circuito::class);
    }
}
