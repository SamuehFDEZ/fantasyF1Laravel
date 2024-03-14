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
    public function up()
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
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
    public function down()
    {
        Schema::dropIfExists('pilotos');
    }
};
