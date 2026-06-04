<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'storeRegister'])->name('register.post');
Route::get('login',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'storeLogin'])->name('login.post');


Route::get('/user',function(){
    return 'user';
})->name('user');
Route::get('/admin',function(){
    return 'admin';
})->name('admin');
Route::get('/customer',function(){
    return 'customer';
})->name('customer');
