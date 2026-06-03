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
// public route
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'storeRegister'])->name('register.post');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'storeLogin'])->name('login.post');

Route::middleware(['auth','role,user'])->controller(AuthController::class)->group(function(){
    Route::get('/user/dashboard',function(){
        return 'Welcome to User';
    })->name('user.dashboard');
});
Route::middleware(['auth','role,admin'])->controller(AuthController::class)->group(function(){
    Route::get('/admin/dashboard',function(){
        return 'Welcome to Adimin';
    })->name('admin.dashboard');
});
Route::middleware(['auth','role,cashier'])->controller(AuthController::class)->group(function(){
    Route::get('/cashier/dashboard',function(){
        return 'Welcome to cashier';
    })->name('cashier.dashboard');
});
// Route::get('/user',function(){
//     return "Hello User 123";
// });