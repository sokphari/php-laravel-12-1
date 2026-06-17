<?php

use App\Http\Controllers\api\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return 'welcome';
});
Route::controller(StudentController::class)->group(function(){
    Route::get('/student','index');
    Route::post('/student','store');
    Route::get('/student/{student}','show');
    Route::delete('/student/{student}','destroy');
    Route::put('/student/{student}','update');
    // Route::match(['put','patch'],'/student/{student}','update');

    
});
?>