<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $users = User::all();

        if ($credentials['email'] !== $users->email) {
            return response()->json(['message' => 'Email not found'], 404);
        }

        if ($credentials['password'] !== $users->password) {
            return response()->json(['message' => 'Password not match'], 401);
        }

        $token = $users->createToken('authToken')->plainTextToken;

        return response()->json([
            'token' => $token,
            'message' => 'Login success',
        ], 200);
    }
}
