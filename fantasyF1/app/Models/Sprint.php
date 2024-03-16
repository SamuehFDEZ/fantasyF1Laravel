<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    protected $table = "sprints";

    protected $fillable = [
        'sprintID',
        'fecha',
        'vueltaRapida',
        'ronda',
    ];

    // Un sprint pertenece a un circuito (1:1)
    public function circuito()
    {
        return $this->belongsTo(Circuito::class);
    }

    // Un sprint tiene (es corrido por) muchos pilotos (N:M)
    public function piloto()
    {
        return $this->belongsToMany(Piloto::class);
    }
}
