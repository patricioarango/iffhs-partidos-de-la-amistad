<?php

namespace App\Traits;

trait ApiResponses{

    protected function success($data, $code = 200){
        return response()->json($data,
            $code);
    }

    protected function ok($data){
        if(count($data) === 0)
        {
            return $this->success($data,204);
        }
        return $this->success($data,200);
    }

    protected function error($message, $statusCode) {
        return response()->json([
            'message' => $message,
            'status' => $statusCode
        ], $statusCode);
    }

}
