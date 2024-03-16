<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Constructor extends Model
{
    use HasFactory;

    protected $table = "constructor";

    protected $fillable = [
        'nombre',
        'añoCreacion',
        'valorMercado',
        'nacionalidad',
    ];


    // Un constructor tiene uno o muchos usuarios (1:N)
    public function piloto()
    {
        return $this->hasMany(Piloto::class);
    }
}
