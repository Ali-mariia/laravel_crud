<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentFormController;

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});*/

route::get('/',[studentFormController::class,'index']);

route::post('/store',[studentFormController::class,'store']);

route::get('/viewform',[studentFormController::class,'view']);

route::get('/delete/{id}',[studentFormController::class,'delete']) ->name('form.delete');
route::get('/edit_record/{id}',[studentFormController::class,'edit_record']);
route::post('/update_data/{id}',[studentFormController::class,'update_data']);