<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('register',[AuthController::class,'ShowFormRegister'])->name('auth.register');
    Route::post('register',[AuthController::class,'register'])->name('auth.register');
    Route::get('verify',[AuthController::class,'verify'])->name('auth.verify');
    Route::get('login',[AuthController::class,'ShowFormLogin'])->name('auth.login');
    Route::post('login',[AuthController::class,'login'])->name('auth.login');
});

Route::get('home',[HomeController::class,'index'])->name('home');
