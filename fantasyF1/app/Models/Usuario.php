<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    protected $fillable = [
        'nombre',
        'contrasenya',
        'email',
        'remember_token',
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value): string
    {
        return  $this->attributes['password'] = bcrypt($value);

    }

    //Un usuario tiene muchos pilotos (1:N)
    public function piloto()
    {
        return $this->hasMany(Piloto::class);
    }
}
