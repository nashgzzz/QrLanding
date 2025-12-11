<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/registro-qr', [LandingController::class, 'store'])->name('registro.qr');