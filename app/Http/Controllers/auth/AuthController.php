<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;


class AuthController extends Controller
{
    // register
    public function StoreRegister(RegisterRequest $register){
        try{

        }catch(\Exception $e){
            return response()->json([
                'status' => false,
                'message'=> 'Register Failse'
            ],500);
        }
    }
}
