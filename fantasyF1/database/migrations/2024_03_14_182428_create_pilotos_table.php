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
        Schema::create('pilotos', function (Blueprint $table) {
            $table->unsignedInteger('num_piloto')->primary(); // Esto creará un campo 'num_piloto' autoincremental que servirá como clave primaria
            $table->string('nombre', '255')->nullable(false);
            $table->float('valorMercado');
            $table->integer('puntosRealizados')->nullable(true);
            $table->date('fechaNac');
            $table->string('nacionalidad');
            $table->string('nombre_constructor');
            $table->text('imgPiloto')->nullable(false); // Agregar columna 'nacionalidad' como VARCHAR(50) NOT NULL
            $table->timestamps();
            // Clave foránea para 'nombre_constructor'
            $table->foreign('nombre_constructor')->references('nombre')->on('constructor')->onDelete('cascade')->onUpdate('cascade');
        });
    }

/*CREATE TABLE PILOTOS(
num_piloto INT PRIMARY KEY,
nombre INT NOT NULL,
valorMercado FLOAT NOT NULL,
puntosRealizados INT NOT NULL,
fechaNac DATE NOT NULL,
nacionalidad VARCHAR(50) NOT NULL,
userID INT NOT NULL,
nombre_constructor VARCHAR(100) NOT NULL,
CONSTRAINT use_usu_fk FOREIGN KEY (userID) REFERENCES USUARIOS(userID)
ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT nom_con_fk FOREIGN KEY (nombre_constructor) REFERENCES CONSTRUCTOR(nombre)
ON DELETE CASCADE ON UPDATE CASCADE
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('pilotos');
    }
};
