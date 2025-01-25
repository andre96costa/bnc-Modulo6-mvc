<?php

use App\Http\Controllers\BladeExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BladeExampleController::class, 'index']);
Route::post('/send-form', [BladeExampleController::class, 'store'])->name('send-form');