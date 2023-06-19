<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\dasboard\dasboardController;


Route::get('/',[HomeController::class,'index']);
Route::get('/dasboard',[dasboardController::class,'index']);
Route::get('/produk',[HomeController::class,'produk']);
Route::get('/checkout',[HomeController::class,'checkout']);