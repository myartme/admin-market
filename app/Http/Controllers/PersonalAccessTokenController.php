<?php

namespace App\Http\Controllers;

use App\ApiResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PersonalAccessTokenController extends Controller
{
    use ApiResponse;

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        if($validation->fails()){
            return $this->validationErrorResponse($validation->errors());
        }

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return $this->notFoundErrorResponse(message:'User not found');
        }

        if(!Hash::check($request->password, $user->password)){
            return $this->unauthorizedErrorResponse();
        }

        return $this->successResponse(['token' => $user->createToken($request->device_name)->plainTextToken]);
    }

    public function destroy(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->successResponse();
    }

    public function destroyByDevice(Request $request)
    {

    }

    public function destroyAll()
    {

    }
}
