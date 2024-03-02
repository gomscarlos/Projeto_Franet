<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\AuthResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
     
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
     
        return $this->makeToken($user);
    }

    public function register(RegisterRequest $request){
        $validated = $request->validated(); 

        $user = User::create([
            'name'=>$request->name,
            'email' =>$request->email,
            'password'=>$request->password
        ]);

        if ($user) {
            return response()->json([
                'status' => 200,
                'message' => "Usuário registrado com sucesso!",
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Algo deu errado"
            ], 500);
        }
    }

    public function makeToken($user){
        $token = $user->createToken('myToken')->plainTextToken;

        return AuthResource::make([
            'token' => $token,
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ]
        ]);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'logout success']);
    }
}
