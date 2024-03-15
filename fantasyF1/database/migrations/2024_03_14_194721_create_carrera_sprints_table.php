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
        Schema::create('carrera_sprints', function (Blueprint $table) {
            $table->unsignedInteger('num_piloto');
            $table->unsignedInteger('sprintID');
            $table->string('tiempo', 10);
            $table->unsignedInteger('posicion');
            $table->primary(['num_piloto', 'sprintID']);
            $table->foreign('num_piloto')->references('num_piloto')->on('pilotos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sprintID')->references('sprintID')->on('sprints')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

/*CREATE TABLE CARRERA_SPRINT(
num_piloto INT,
sprintID INT,
tiempo VARCHAR(10),
posicion INT,
CONSTRAINT nur_spr_pk PRIMARY KEY (num_piloto, sprintID),
CONSTRAINT num_spr_fk FOREIGN KEY (num_piloto) REFERENCES PILOTOS(num_piloto)
ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT spr_spr_fk FOREIGN KEY (sprintID) REFERENCES SPRINT(sprintID)
ON DELETE CASCADE ON UPDATE CASCADE
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('carrera__sprints');
    }
};
