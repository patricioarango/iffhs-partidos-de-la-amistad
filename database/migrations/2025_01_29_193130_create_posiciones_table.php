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
        Schema::create('posiciones', function (Blueprint $table) {
            $table->id();
            $table->string('posicion',length:255);
            $table->timestamps();
        });
        
        DB::table('posiciones')->insert(
            array(
                'posicion' => 'arquero',
            )
        );
        DB::table('posiciones')->insert(
            array(
                'posicion' => 'defensor',
            )
        );
        DB::table('posiciones')->insert(
            array(
                'posicion' => 'volante',
            )
        );
        DB::table('posiciones')->insert(
            array(
                'posicion' => 'delantero',
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posiciones');
    }
};
