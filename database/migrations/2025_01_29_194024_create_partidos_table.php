<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_local');
            $table->unsignedBigInteger('equipo_visitante');
            $table->unsignedBigInteger('estadio_id');
            $table->dateTime('fecha');
            $table->foreign('equipo_local')->references('id')->on('equipos');
            $table->foreign('equipo_visitante')->references('id')->on('equipos');
            $table->foreign('estadio_id')->references('id')->on('estadios');
            $table->integer('goles_local');
            $table->integer('goles_visitante');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
