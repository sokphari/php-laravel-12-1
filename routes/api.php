<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    $array = [
        [
            'id' => 1,
            'name' => 'A',
            'gender' => 'Male'
        ]
    ];
    return response()->json([
        'message' => 'true',
        'data' => $array
    ],200);
});

Route::get('/users',[Controller::class,'index']);
Route::post('/user',[Controller::class,'store']);
Route::get('/user/{id}',[Controller::class,'getUser']);
Route::delete('/users/{id}',[Controller::class,'destroy']);
Route::put('/users/{id}',[Controller::class,'update']);