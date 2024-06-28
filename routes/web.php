<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserSettingsContoller;

Route::get('/',[UsersController::class,'main'])->name('main')->middleware('auth');
Route::get('/login',[UsersController::class,'login'])->name('login');
Route::get('/comments',[UsersController::class,'comments']);
Route::get('/profile/{username}',[UsersController::class,'profile']);


Route::post('/register',[UsersController::class,'register'])->name('register.user');
Route::post('/login_user',[UsersController::class,'login_user'])->name('login.user');
Route::post('/logout',[UsersController::class,'logout'])->name('logout');

// update profile section
Route::put('/update_pfp',[UserSettingsContoller::class,'update_pfp'])->name('update_pfp.user');
Route::put('/update_about',[UserSettingsContoller::class,'update_about'])->name('update_about.user');

//for testnig
Route::get('/testing/{username}',[UsersController::class,'testing']);


