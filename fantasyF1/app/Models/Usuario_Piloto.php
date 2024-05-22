<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_Piloto extends Model
{
    use HasFactory;

    protected $table = "usuario_pilotos";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userID',
        'nombre_piloto',
        'puntosRealizados'
    ];


    // Una carrera pertenece a muchos circuitos
    public function usuario(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }
    // Una carrera pertenece a muchos pilotos
    public function piloto(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Piloto::class);
    }
}
