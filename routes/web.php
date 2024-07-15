<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/user/update/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::post('/user/{id}', [UserController::class, 'userUpdate'])->name('userUpdate');
