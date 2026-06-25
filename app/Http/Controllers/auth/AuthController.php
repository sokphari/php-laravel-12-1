<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // register
    public function StoreRegister(RegisterRequest $register){
        try{
            $validate = $register->validated();
            $user = User::create($validate); //not security 
            return response()->json([
                'status' => 1,
                'msg'    => 'created user Already',
                'data'   => $user
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'status' => false,
                'message'=> 'Register Failse',
                'data'   => $e->getMessage()
            ],401);
        }
    }
    // Login
    public function StoreLogin(LoginRequest $request){
        try{
            $data = $request->validated();
            $user = User::where('email', $data['email'])
                ->where('roles_id', $data['roles_id'])
                ->first();

            if (!$user || !Hash::check($data['password'], $user->password)) {
                return response()->json([
                    'status' => false,
                    'msg'    => 'Invalid credentials or role',
                ], 403);
            }

            $token = $user->createToken('api-token')->plainTextToken; // create key for user login use route api

            return response()->json([
                'status' => true,
                'mes'  => 'Login successfully',
                'Token' => $token,
                'Authentication' => 'bearer Token'
             ]);


        }catch(\Exception $e){
            return response()->json([
                'status' => 0,
                'msg'    => 'Login Fails',
                'data'   => null
            ],500);
        }
    }
}
