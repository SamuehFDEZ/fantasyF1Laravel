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
        Schema::create('carrera__cualis', function (Blueprint $table) {
            $table->unsignedInteger('num_piloto');
            $table->unsignedInteger('cualID');
            $table->unsignedInteger('posicion');
            $table->string('tiempo_q1', 10)->default('');
            $table->string('tiempo_q2', 10)->default('');
            $table->string('tiempo_q3', 10)->default('');
            $table->primary(['num_piloto', 'cualID']);
            $table->foreign('num_piloto')->references('num_piloto')->on('pilotos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cualID')->references('cualID')->on('cualis')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

/*CREATE TABLE CARRERA_CUALI(
num_piloto INT,
cualID INT,
posicion INT,
tiempo_q1 VARCHAR(10) DEFAULT '',
tiempo_q2 VARCHAR(10) DEFAULT '',
tiempo_q3 VARCHAR(10) DEFAULT '',
CONSTRAINT nuc_car_pk PRIMARY KEY (num_piloto, cualID),
CONSTRAINT num_car_fk FOREIGN KEY (num_piloto) REFERENCES PILOTOS(num_piloto)
ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT cua_car_fk FOREIGN KEY (cualID) REFERENCES CUALI(cualID)
ON DELETE CASCADE ON UPDATE CASCADE
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('carrera__cualis');
    }
};
