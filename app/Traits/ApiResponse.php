<?php

namespace App\Traits;

trait ApiResponse
{
    public function success($message, $code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
        ], $code);
    }


    public function error($message, $code = 404)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }
}
