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
        Schema::create('sprints', function (Blueprint $table) {
            $table->id('sprintID');
            $table->date('fecha')->nullable(false);
            $table->string('vueltaRapida', 10)->nullable(false);
            $table->unsignedInteger('ronda')->default(null);
            $table->foreign('ronda')->references('ronda')->on('circuitos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

/*CREATE TABLE SPRINT(
sprintID INT PRIMARY KEY,
fecha DATE NOT NULL,
vueltaRapida VARCHAR(10) NOT NULL,
ronda INT NOT NULL,
CONSTRAINT ron_spr_fk FOREIGN KEY (ronda) REFERENCES CIRCUITOS(ronda)
ON DELETE CASCADE ON UPDATE CASCADE
);*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('sprints');
    }
};
