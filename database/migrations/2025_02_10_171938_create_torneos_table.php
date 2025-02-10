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
        Schema::create('torneos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',length:255);
            $table->timestamps();
        });
        $estadios = array(
            ['nombre' => 'Torneo Viernes Peñarol'],
            ['nombre' => 'Torneo Martes 21hs'],
            ['nombre' => 'Torneo Lunes de la Española'],
        );
        DB::table('torneos')->insert($estadios);
        $equipos = array(
            ['equipo' => 'Don Julio FC'],
        );
        DB::table('equipos')->insert($equipos);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
