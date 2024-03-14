<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    //Un usuario tiene muchos pilotos (1:N)
    public function piloto()
    {
        return $this->hasMany(Piloto::class);
    }
}
