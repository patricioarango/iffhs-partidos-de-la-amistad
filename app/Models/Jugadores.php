<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jugadores extends Model
{
    /** @use HasFactory<\Database\Factories\JugadoresFactory> */
    use HasFactory;
    protected $table = 'jugadores';
    protected $fillable = ['nombre','apellido','equipo_id'];
    public function equipo(): BelongsTo
    {
        return $this->BelongsTo(Equipos::class, 'equipo_id');
    }
}
