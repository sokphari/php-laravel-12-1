<?php

use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProductController::class, 'create']);
Route::prefix('suplier')->controller(CategoryController::class)->group(function(){
    Route::post('/create','store')->name('store.post');
    Route::get('/create/list','create')->name('store.get');
    Route::get('/list','index')->name('suppliers.index');

});
Route::prefix('admin')->controller(ProductController::class)->group(function(){
    Route::post('/create','store')->name('store1.post');
    Route::get('/create/form','create')->name('create.get');
    Route::get('/index','index')->name('products.index');
    Route::delete('/delete/{id}','destroy')->name('destroy.delete');
    Route::get('/edit/{id}','edit')->name('edit.get');
    Route::put('/update/data/{id}','update')->name('update');
});
