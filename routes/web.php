<?php

use App\Http\Controllers\NavigateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserSettingsContoller;
use App\Http\Controllers\UserPostCommentController;
use App\Http\Controllers\GoogleLoginController;

Route::get('/',[UsersController::class,'main'])->name('main')->middleware('auth');
Route::get('/login',[UsersController::class,'login'])->name('login');
Route::get('/comments',[UsersController::class,'comments']);
Route::get('/profile/{username}',[UsersController::class,'profile'])->middleware('auth');;

//for going to register page
Route::get('/register_user',[UsersController::class,'register_user']);

Route::post('/register',[UsersController::class,'register'])->name('register.user');
Route::post('/login_user',[UsersController::class,'login_user'])->name('login.user');
Route::post('/logout',[UsersController::class,'logout'])->name('logout');

// update profile section
Route::put('/update_pfp',[UserSettingsContoller::class,'update_pfp'])->name('update_pfp.user');
Route::put('/update_about',[UserSettingsContoller::class,'update_about'])->name('update_about.user');
Route::post('/update_skills',[UserSettingsContoller::class,'update_skills'])->name('update_skills.user');

//for posting
Route::post('/user_post',[UserPostCommentController::class,'post'])->name('user.post');

//for liking post
Route::post('/like_post',[UserPostCommentController::class,'like_post'])->name('like.post');
//for commenting on post
Route::post('/comment',[UserPostCommentController::class,'comment'])->name('user.comment');
//for replying in comments
Route::post('/reply',[UserPostCommentController::class,'reply'])->name('user.reply');
//for viewing post
Route::get('/post/{id}',[UserPostCommentController::class,'view_post'])->name('view.post');

//for searching
Route::get('/search/{thing}',[NavigateController::class, 'search']);
//searching form 
Route::get('/input_search',[NavigateController::class, 'input_search'])->name('search');

//for testing
Route::get('/testing',[UsersController::class,'testing']);
Route::get('/testing1',[UserSettingsContoller::class,'testing']);

//Google authentication
Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

