<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadios extends Model
{
    /** @use HasFactory<\Database\Factories\EstadiosFactory> */
    use HasFactory;
    protected $table = 'estadios';
    protected $fillable = ['nombre','direccion'];
}
