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
        Schema::create('constructor', function (Blueprint $table) {
            $table->string('nombre', 200)->primary(); // Definir 'nombre' como clave primaria y VARCHAR(200)
            $table->unsignedInteger('añoCreacion')->nullable(false); // Agregar columna 'añoCreacion' como INT NOT NULL
            $table->string('valorMercado', 50)->nullable(false); // Agregar columna 'valorMercado' como VARCHAR(50) NOT NULL
            $table->string('nacionalidad', 255)->nullable(false); // Agregar columna 'nacionalidad' como VARCHAR(50) NOT NULL
            $table->text('coche')->nullable(false); // Agregar columna 'nacionalidad' como VARCHAR(50) NOT NULL
            $table->text('logo')->nullable(false); // Agregar columna 'nacionalidad' como VARCHAR(50) NOT NULL
            $table->unsignedInteger('puntosRealizados')->nullable(false);
            $table->timestamps(); // Agregar los campos de control de tiempo (created_at, updated_at)
        });
    }

/*CREATE TABLE CONSTRUCTOR(
nombre VARCHAR(200) PRIMARY KEY,
añoCreación INT NOT NULL,
valorMercado VARCHAR(50) NOT NULL,
nacionalidad VARCHAR(50) NOT NULL
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('constructor');
    }
};
