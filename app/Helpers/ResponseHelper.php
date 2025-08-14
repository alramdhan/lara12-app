<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function baseResponse($message, $status = false, $type = 'error', $data = null)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'type' => $type,
            'data' => $data
        ]);
    }
}