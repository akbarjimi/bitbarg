<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\FingerprintController;

Route::resource('meetings', MeetingController::class);
Route::resource('fingerprints', FingerprintController::class);

