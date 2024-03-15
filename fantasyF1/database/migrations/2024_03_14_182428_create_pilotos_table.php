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
            $table->unsignedInteger('num_piloto')->primary();
            $table->string('nombre');
            $table->float('valorMercado');
            $table->integer('puntosRealizados');
            $table->date('fechaNac');
            $table->string('nacionalidad');
            $table->unsignedBigInteger('userID');
            $table->string('nombre_constructor');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('userID')->references('userID')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
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
