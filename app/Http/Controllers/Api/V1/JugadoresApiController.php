<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Jugadores;
use App\Traits\ApiResponses;

class JugadoresApiController extends Controller
{
    use ApiResponses;
    public function index(){
        $jugadores = Jugadores::with('equipo')->get();
        return $this->ok($jugadores);
    }
}
