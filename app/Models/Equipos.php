<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipos extends Model
{
    /** @use HasFactory<\Database\Factories\EquiposFactory> */
    use HasFactory;
    protected $table = 'equipos';
    protected $fillable = ['equipo'];

}
