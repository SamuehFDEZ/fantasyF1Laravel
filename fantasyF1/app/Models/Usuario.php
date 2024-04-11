<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    protected $fillable = [
        'nombre',
        'contrasenya',
        'email',
        'remember_token'
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value): string
    {
        return  $this->attributes['contrasenya'] = bcrypt($value);

    }

    //Un usuario tiene muchos pilotos (1:N)
    public function piloto(): HasMany
    {
        return $this->hasMany(Piloto::class);
    }
}
