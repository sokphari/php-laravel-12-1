<?php

use App\Http\Controllers\Customer\CustomerController;
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

//public route
Route::get('/',[CustomerController::class,'index'])->name('index.get');
Route::controller(CustomerController::class)->group(function(){
    Route::get('/customers/create', 'create')->name('create.get');
    Route::post('/customer/store','store')->name('store.post');
    Route::delete('/customer/{id}','destroy')->name('destroy.delete');
    Route::get('/customer/{id}','edit')->name('edit.get');
});
