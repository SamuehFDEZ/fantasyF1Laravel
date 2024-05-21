<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_Constructor extends Model
{
    use HasFactory;


    protected $table = "usuario_constructor";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userID',
        'nombre_constructor',
        'puntosRealizados'
    ];


    // Una carrera pertenece a muchos circuitos
    public function usuario(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }
    // Una carrera pertenece a muchos pilotos
    public function constructor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Constructor::class);
    }
}
