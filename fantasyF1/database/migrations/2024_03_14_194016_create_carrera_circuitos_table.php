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
        Schema::create('carrera_circuitos', function (Blueprint $table) {
            $table->unsignedInteger('num_piloto');
            $table->unsignedInteger('ronda');
            $table->string('tiempo', 10);
            $table->unsignedInteger('posicion');
            $table->primary(['num_piloto', 'ronda']);
            $table->foreign('num_piloto')->references('num_piloto')->on('pilotos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ronda')->references('ronda')->on('circuitos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /*CREATE TABLE CARRERA_CIRCUITO(
	num_piloto INT,
	ronda INT,
    tiempo VARCHAR(10),
    posicion INT,
    CONSTRAINT nur_cir_pk PRIMARY KEY (num_piloto, ronda),
    CONSTRAINT num_cir_fk FOREIGN KEY (num_piloto) REFERENCES PILOTOS(num_piloto)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT ron_cir_fk FOREIGN KEY (ronda) REFERENCES CIRCUITOS(ronda)
	ON DELETE CASCADE ON UPDATE CASCADE
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera__circuitos');
    }
};
