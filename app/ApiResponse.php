<?php

namespace App;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponse
{
    protected function successResponse($data = [], $meta = [], $message = 'Success', $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'data' => $data,
            'meta' => $meta
        ], $code);
    }

    protected function errorResponse($errors = [], $message = 'Bad Request', $code = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }

    protected function unauthorizedErrorResponse($errors = [], $message = 'Invalid credentials', $code = Response::HTTP_UNAUTHORIZED): JsonResponse
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }

    protected function notFoundErrorResponse($errors = [], $message = 'Not Found', $code = Response::HTTP_NOT_FOUND): JsonResponse
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }

    protected function validationErrorResponse($errors = [], $message = 'Validation error', $code = 422): JsonResponse
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }
}
