<?php

use App\Http\Controllers\api\StudentController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return 'welcome';
});
Route::middleware(['auth:sanctum','role:admin,instructor'])->controller(StudentController::class)->group(function(){
    Route::get('/student','index');
    Route::post('/student','store');
    Route::get('/student/{student}','show');
    Route::delete('/student/{student}','destroy');
    Route::put('/student/{student}','update');
    // Route::match(['put','patch'],'/student/{student}','update');
});
Route::middleware(['auth:sanctum','role:student'])->group(function(){
    Route::get('/me',function(){
        return 'profile';
    });
});


Route::post('/register',[AuthController::class,'StoreRegister']);
Route::post('/login',[AuthController::class,'StoreLogin']);


?>