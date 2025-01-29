<?php

namespace App\Traits;

trait ApiResponses{

    protected function successResponse($data, $code){
        return response()->json($data, $code);
    }
}
