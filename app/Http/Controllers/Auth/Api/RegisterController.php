<?php

namespace App\Http\Controllers\Auth\Api;

use App\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    use ApiResponse;

    public function store(RegisterRequest $request): JsonResponse
    {
        $user = User::create($request->all());
        event(new Registered($user));

        $token = $user->createToken($request->device_name ?? '')->plainTextToken;

        return $this->successResponse([
            'user' => $user,
            'access_token' => $token
        ], code: Response::HTTP_CREATED);
    }
}
