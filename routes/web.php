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

route::post('store',[studentFormController::class,'store']);


