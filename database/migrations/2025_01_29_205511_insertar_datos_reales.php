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
        $estadios = array(
            ['nombre' => 'Lugano Tennis Club','direccion' => 'Murgiondo 3915, Lugano'],
            ['nombre' => 'Peñarol','direccion' => 'Paraguay 2159, Valentín Alsina'],
        );
        DB::table('estadios')->insert($estadios);
        $equipos = array(
            ['equipo' => 'Los Amigos'],
            ['equipo' => 'Los Rivales'],
        );
        DB::table('equipos')->insert($equipos);

        $jugadores = array(
            ['nombre' => 'Diego','apellido' => 'Olmedo'],
            ['nombre' => 'Patricio','apellido' => 'Arango'],
            ['nombre' => 'Darío','apellido' => 'De Jesús'],
            ['nombre' => 'Juan Pablo','apellido' => 'Casanova'],
            ['nombre' => 'Pablo','apellido' => 'Rodríguez'],
            ['nombre' => 'Maxi','apellido' => 'Petreca'],
            ['nombre' => 'Ignacio','apellido' => 'Naveira',],
            ['nombre' => 'José','apellido' => 'Zapatero'],
            ['nombre' => 'Nicolás','apellido' => 'Martino'],
            ['nombre' => 'Árbol','apellido' => 'Pompeya'],
            ['nombre' => 'Nicolás','apellido' => 'Pompeya'],
            ['nombre' => 'Lucas','apellido' => 'Pompeya'],
            ['nombre' => 'Gabriel','apellido' => 'Tuninetti'],
        );

        DB::table('jugadores')->insert($jugadores);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
