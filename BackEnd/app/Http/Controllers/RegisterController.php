<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   
    public function register(RegisterRequest $registerRequest)
    {
        try {
            $user = User::create([
                'name' => $registerRequest->name,
                'email' => $registerRequest->email,
                'password' => Hash::make($registerRequest->password),
                'role' => $registerRequest->role
            ]);
    
            return response()->json([
                'success' => 'true',
                'message' => 'inscription okay',
                'user' => $user
            ],201);

        } catch (QueryException $e) {
            return response()->json([
                'success' => 'false',
                'message' => 'erreur lors de l\' inscription '.$e->getMessage()
            ],500);
        }
    }
}
