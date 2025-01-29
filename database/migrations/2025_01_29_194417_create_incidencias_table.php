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
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('partido_id');
            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->unsignedBigInteger('alineacion_id');
            $table->foreign('alineacion_id')->references('id')->on('alineaciones');
            $table->enum('incidencia',['TARJETA_AMARILLA', 'TARJETA_ROJA', 'GOL', 'CAMBIO_SALIENTE', 'CAMBIO_ENTRANTE', 'LESION', 'PENAL', 'GOL_ANULADO', 'PENAL_FALLO','OTRO']);
            $table->unsignedBigInteger('minuto');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias');
    }
};
