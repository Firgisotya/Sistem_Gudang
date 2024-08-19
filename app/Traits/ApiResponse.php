<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponse
{
    public function apiSuccess($data, $message = NULL, $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public function apiError($message = null, $code = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json(['message' => $message], $code);
    }
}
