<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->middleware('auth');

Route::get('/pemesanan', [PemesananController::class,'index'])->middleware('auth');
Route::post('/pemesanan', [PemesananController::class,'store'])->middleware('auth');

Route::get('/pembayaran', [PembayaranController::class,'index'])->middleware('auth');

Route::get('/ulasan', [UlasanController::class,'index'])->middleware('auth');

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'register']);