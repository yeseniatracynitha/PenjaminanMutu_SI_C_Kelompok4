<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AbsensiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/absensi', [AbsensiController::class, 'index']);
