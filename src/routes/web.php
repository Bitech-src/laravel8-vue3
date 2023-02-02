<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Manager\UserController;


/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/selectHome', [HomeController::class, 'index']);

Route::get('/user/home',[HomeController::class, 'showUser']);
Route::get('/admin/home',[HomeController::class, 'showAdmin']);

// 認証テスト
Route::get('/user_edit', [UserController::class, 'index'])->name('user_edit');


