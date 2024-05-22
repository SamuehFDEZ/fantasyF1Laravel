<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->unsignedInteger('userID')->autoIncrement(); // Esto crea un campo 'userID' autoincremental que servirá como clave primaria
            $table->string('nombre', 255)->unique(); // Campo nombre VARCHAR(255) NOT NULL
            $table->string('contrasenya', 255); // Campo contrasenya VARCHAR(255) NOT NULL
            $table->string('email', 255)->unique(); // Campo email VARCHAR(255) NOT NULL y único
            $table->unsignedInteger('puntosRealizadosTotales')->default(0); // Campo email VARCHAR(255) NOT NULL y único
            $table->timestamps(); // Esto creará automáticamente los campos 'created_at' y 'updated_at' para el control de fechas de creación y actualización
            $table->rememberToken();

        });
    }
    /*CREATE TABLE USUARIOS(
    userID INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    contrasenya VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
    );*/


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
