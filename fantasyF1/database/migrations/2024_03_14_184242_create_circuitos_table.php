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
        Schema::create('circuitos', function (Blueprint $table) {
            $table->unsignedBigInteger('ronda')->primary(); // Utilizar id autoincremental
            $table->integer('km')->nullable(false);
            $table->date('fecha')->nullable(false);
            $table->string('nombre', 200)->nullable(false);
            $table->integer('num_vueltas')->nullable(false);
            $table->integer('num_curvas')->nullable(false);
            $table->string('autor_RecordCircuito', 200)->nullable(false);
            $table->string('tiempo_RecordCircuito', 10)->nullable(false);
            $table->integer('año_RecordCircuito')->nullable(false);
            $table->integer('DNF')->nullable(false);
            $table->string('DriverOfTheDay', 50)->nullable(false);
            $table->integer('Adelantamientos')->nullable(false);
            $table->string('podiums', 200)->nullable(false);
            $table->string('vueltaRapida', 10)->nullable(false);
            $table->timestamps();
        });
    }

/*CREATE TABLE CIRCUITOS(
ronda INT PRIMARY KEY,
km INT NOT NULL,
fecha DATE NOT NULL,
nombre VARCHAR(200) NOT NULL,
num_vueltas INT NOT NULL,
num_curvas INT NOT NULL,
autor_RecordCircuito VARCHAR(200) NOT NULL,
tiempo_RecordCircuito VARCHAR(10) NOT NULL,
año_RecordCircuito DATE NOT NULL,
top10Pilotos VARCHAR(300) NOT NULL,
DNF INT,
DriverOfTheDay VARCHAR(50),
Adelantamientos INT,
podiums VARCHAR(200),
vueltaRapida VARCHAR(10) NOT NULL
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('circuitos');
    }
};
