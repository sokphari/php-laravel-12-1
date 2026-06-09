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
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'storeRegister'])->name('register.post');
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'storeLogin'])->name('login.post');
// Route::middleware(['auth','role:user'])->group(function(){
//     Route::get('/user',function(){
//         return "welcome to use dashboard";
//     })->name('user');
// });

// Route::get('/user',function(){
//     return 'user';
// })->middleware(['auth','role:user']);
Route::post('logout',[AuthController::class,'logout'])->name('logout');
Route::middleware(['auth','role:user,admin'])->group(function(){
    Route::get('/user',function(){
        return "welcome to dashboard user";
    });

    Route::get('dashboard/',function(){
        return view('dashboard');
    });
});
Route::middleware(['auth','role:customer,admin'])->group(function(){
    Route::get('/customer',function(){
        return "welcome to dashboard customer";
    })->name('customer');
});
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin',function(){
        return "welcome to dashboard admin";
    })->name('admin');
});
// Route::get('/admin',function(){
//     return 'admin';
// })->name('admin');
// Route::get('/customer',function(){
//     return 'customer';
// })->name('customer');
