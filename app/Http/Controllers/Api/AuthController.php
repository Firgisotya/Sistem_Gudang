<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use ApiResponse;
    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            $users = User::where('email', $credentials['email'])->first();

            // cek email
            if (!$users) {
                return response()->json([
                    'message' => 'Email not found'
                ], 404);
            }

            // cek password
            if (!Hash::check($credentials['password'], $users->password)) {
                return response()->json([
                    'message' => 'Password is incorrect'
                ], 401);
            }

            $token = $users->createToken('token-name')->plainTextToken;

            return $this->apiSuccess([
                'token' => $token,
                'token_type' => 'Bearer',
            ], 'Login Success');
        } catch (\Throwable $th) {
            return $this->apiError($th->getMessage(), 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return $this->apiSuccess([], 'Logout Success');
        } catch (\Throwable $th) {
            return $this->apiError($th->getMessage(), 500);
        }
    }
}
