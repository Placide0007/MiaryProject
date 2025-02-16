<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterRequest $registerRequest)
    {
        try {
            User::create([
                'name' => $registerRequest->name,
                'email' => $registerRequest->email,
                'password' => Hash::make($registerRequest->password)
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Inscription réussie.'
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
            ],400);
        }
    }
}
