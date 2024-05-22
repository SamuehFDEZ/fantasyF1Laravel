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
        Schema::create('usuario_pilotos', function (Blueprint $table) {
            $table->unsignedInteger('userID'); // Esto crea un campo 'userID' autoincremental que servirá como clave primaria
            $table->string('nombre_piloto', '255'); // Definir 'nombre' como clave primaria y VARCHAR(200)
            $table->unsignedInteger('puntosRealizados')->nullable(false);
            $table->primary(['userID', 'nombre_piloto']);
            $table->foreign('userID')->references('userID')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nombre_piloto')->references('nombre')->on('pilotos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_pilotos');
    }
};
