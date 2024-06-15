<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/',[UsersController::class,'main']);
Route::get('/login',[UsersController::class,'login']);
Route::get('/comments',[UsersController::class,'comments']);

// Route::get('/', function () {
//     return view('/users/index');
// });
