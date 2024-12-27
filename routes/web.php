<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChannelContrller;


Route::prefix('auth')->group(function () {
    Route::get('register',[AuthController::class,'ShowFormRegister'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register');
    Route::get('verify',[AuthController::class,'verify'])->name('verify');
    Route::get('login',[AuthController::class,'ShowFormLogin'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login');
});

Route::middleware(['auth', 'shareChannels'])->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('home',[HomeController::class,'index'])->name('home');
    Route::post('channel',[ChannelContrller::class, 'create'])->name('channel.store');
    Route::get('message/{slug}',[ChannelContrller::class, 'message'])->name('message');
    Route::get('join/{slug}',[ChannelContrller::class, 'joinChannel'])->name('join.channel');
    Route::get('leave/{slug}',[ChannelContrller::class, 'leaveChannel'])->name('leave.channel');
    Route::get('reject/{id}',[ChannelContrller::class, 'rejectInvite'])->name('reject.invite');
    Route::get('channels/load',[ChannelContrller::class, 'loadChannels'])->name('channels.load');
});
