<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Equipos;
use App\Traits\ApiResponses;

class EquiposApiController extends Controller
{
    use ApiResponses;
    public function index(){
        $equipos = Equipos::all();
        return $this->ok($equipos);
    }
}
