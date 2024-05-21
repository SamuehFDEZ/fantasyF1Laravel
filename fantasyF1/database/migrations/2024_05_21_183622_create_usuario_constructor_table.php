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
        Schema::create('usuario_constructor', function (Blueprint $table) {
            $table->unsignedInteger('userID'); // Esto crea un campo 'userID' autoincremental que servirá como clave primaria
            $table->string('nombre_constructor', 200); // Definir 'nombre' como clave primaria y VARCHAR(200)
            $table->unsignedInteger('puntosRealizados')->nullable(false);
            $table->primary(['userID', 'nombre_constructor']);
            $table->foreign('userID')->references('userID')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nombre_constructor')->references('nombre')->on('constructor')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('usuario_constructor');
    }
};
