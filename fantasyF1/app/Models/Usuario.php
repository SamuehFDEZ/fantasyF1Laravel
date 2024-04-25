<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Usuario extends Model
{
    use HasFactory;
    use Notifiable;


    protected $table = "usuarios";

   /* protected $fillable = [
        'nombre',
        'contrasenya',
        'email',
        'remember_token'
    ];*/

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'email',
        'contrasenya',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contrasenya',
        'remember_token',
    ];

    //Un usuario tiene muchos pilotos (1:N)
    public function piloto(): HasMany
    {
        return $this->hasMany(Piloto::class);
    }
}
