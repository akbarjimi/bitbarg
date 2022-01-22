<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MeetingController;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::delete('/revoke', [AuthController::class, 'revoke'])->name('revoke');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('user', UserController::class);
    Route::apiResource('meetings', MeetingController::class);
});

