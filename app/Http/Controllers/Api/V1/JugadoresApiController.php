<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Jugadores;
use App\Traits\ApiResponses;

class JugadoresApiController extends Controller
{
    use ApiResponses;
    public function index(){
        $jugadores = Jugadores::all();
        return $this->ok($jugadores);
    }
}
