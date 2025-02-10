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
        Schema::dropIfExists('equipos_jugadores');

        Schema::create('tipo_incidencia', function (Blueprint $table) {
            $table->id();
            $table->string('incidencia',length:255);
            $table->timestamps();
        });
        $tipo_incidencias = array(
            ['incidencia' => 'TARJETA_AMARILLA'],
            ['incidencia' => 'TARJETA_ROJA'],
            ['incidencia' => 'GOL'],
            ['incidencia' => 'CAMBIO_SALIENTE'],
            ['incidencia' => 'CAMBIO_ENTRANTE'],
            ['incidencia' => 'LESION'],
            ['incidencia' => 'PENAL'],
            ['incidencia' => 'GOL_ANULADO'],
            ['incidencia' => 'PENAL_FALLO'],
            ['incidencia' => 'JUGADOR_DEL_PARTIDO'],
            ['incidencia' => 'OTRO'],
        );
        DB::table('tipo_incidencia')->insert($tipo_incidencias);
        Schema::table('incidencias', function (Blueprint $table) {
            $table->dropColumn('incidencia');
            $table->unsignedBigInteger('tipo_incidencia_id');
        });

        Schema::table('jugadores', function (Blueprint $table) {
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
        Schema::table('partidos', function (Blueprint $table) {
            $table->enum('estado',['NO_INICIADO', 'FINALIZADO', 'SUSPENDIDO']);
            $table->unsignedBigInteger('torneo_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
