<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    public function login(LoginRequest $loginRequest)
    {
        if(Auth::attempt($loginRequest->only('email','password')))
        {
            try {
                return response()->json([
                    'success' => true,
                    'user' => Auth::user()
                ],201);
            } catch (QueryException $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'identifiant incorrecte'
                ],401);
            }

        }
    }

}
