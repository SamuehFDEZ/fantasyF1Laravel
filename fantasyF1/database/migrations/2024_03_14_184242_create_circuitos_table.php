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
            $table->unsignedInteger('ronda')->primary(); // Definir 'ronda' como clave primaria y INT
            $table->integer('km')->nullable(false); // Agregar columna 'km' como INT NOT NULL
            $table->date('fecha')->nullable(false); // Agregar columna 'fecha' como DATE NOT NULL
            $table->string('nombre', 200)->nullable(false); // Agregar columna 'nombre' como VARCHAR(200) NOT NULL
            $table->integer('num_vueltas')->nullable(false); // Agregar columna 'num_vueltas' como INT NOT NULL
            $table->integer('num_curvas')->nullable(false); // Agregar columna 'num_curvas' como INT NOT NULL
            $table->string('autor_RecordCircuito', 200)->nullable(false); // Agregar columna 'autor_RecordCircuito' como VARCHAR(200) NOT NULL
            $table->string('tiempo_RecordCircuito', 10)->nullable(false); // Agregar columna 'tiempo_RecordCircuito' como VARCHAR(10) NOT NULL
            $table->integer('año_RecordCircuito')->nullable(false); // Agregar columna 'año_RecordCircuito' como DATE NOT NULL
            $table->integer('DNF')->nullable(false); // Agregar columna 'DNF' como INT NULLABLE
            $table->string('DriverOfTheDay', 50)->nullable(false); // Agregar columna 'DriverOfTheDay' como VARCHAR(50) NULLABLE
            $table->integer('Adelantamientos')->nullable(false); // Agregar columna 'Adelantamientos' como INT NULLABLE
            $table->string('podiums', 200)->nullable(false); // Agregar columna 'podiums' como VARCHAR(200) NULLABLE
            $table->string('vueltaRapida', 10)->nullable(false); // Agregar columna 'vueltaRapida' como VARCHAR(10) NOT NULL
            $table->timestamps(); // Agregar los campos de control de tiempo (created_at, updated_at)

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
