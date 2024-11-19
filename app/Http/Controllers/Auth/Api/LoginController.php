<?php

namespace App\Http\Controllers\Auth\Api;

use App\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    use ApiResponse;

    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken($request->device_name ?? '')->plainTextToken;

        return $this->successResponse([
            'user' => $user,
            'access_token' => $token,
        ]);
    }

    public function destroy(): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return $this->successResponse(message: 'You have successfully logged out.');
    }
}
