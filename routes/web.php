<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Account\UserController;

//Auth Routes
Route::group(['prefix'=> 'auth', 'middleware'=> ['guest']], function () {
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginAuth'])->name('loginAuth');
});

//User's dashboard
Route::group(['prefix'=> 'account', 'middleware'=> ['auth']], function () {
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    //Verification
    Route::group(['prefix'=> 'verify/user'], function () {
        Route::get('form', [UserController::class, 'verifyUserForm'])->name('verify-user-form');
        Route::post('post', [UserController::class, 'verifyUserPost'])->name('verify-user-post');

        Route::post('resend-code', [UserController::class, 'ResendEmailCode'])->name('resend-email-code');
    });
});




