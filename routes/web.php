<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/register', [AuthController::class, 'register'])->name('register');
Route::post('auth/register', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('auth/login', [AuthController::class, 'login'])->name('login');
Route::post('auth/login', [AuthController::class, 'loginAuth'])->name('loginAuth');
Route::get('/user/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');







Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/login', [UserController::class, 'login']);
Route::post('/user', [UserController::class, 'store']);

Route::get('/user', [UserController::class, 'index']);
// Route::post('', [UserController::class, 'logout'])->name('logout');


// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/user/update/{id}', [UserController::class, 'update'])->name('update');
// Route::delete('/user/{id}', [UserController::class, 'destroy']);
// Route::post('/user/{id}', [UserController::class, 'userUpdate'])->name('userUpdate');

