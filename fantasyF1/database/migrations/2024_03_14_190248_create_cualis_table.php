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
        Schema::create('cualis', function (Blueprint $table) {
            $table->unsignedBigInteger('cualID')->primary();
            $table->string('weather', 200)->nullable(false);
            $table->date('fecha')->nullable(false);
            $table->string('tiempoVuelta', 200)->nullable(false);
            $table->unsignedInteger('ronda')->nullable(false);
            $table->foreign('ronda')->references('ronda')->on('circuitos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

/*CREATE TABLE CUALI(
cualID INT PRIMARY KEY,
weather VARCHAR(200) NOT NULL,
fecha DATE NOT NULL,
tiempoVuelta VARCHAR(200) NOT NULL,
ronda INT NOT NULL,
CONSTRAINT ron_cua_fk FOREIGN KEY (ronda) REFERENCES CIRCUITOS(ronda)
ON DELETE CASCADE ON UPDATE CASCADE
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('cualis');
    }
};
