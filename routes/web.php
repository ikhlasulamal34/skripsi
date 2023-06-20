<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\dashboard\dasboardController;
use App\Http\Controllers\dashboard\ProductController;

//LANDING PAGE
Route::get('/',[HomeController::class,'index']);
Route::get('/mobil',[HomeController::class,'mobil']);
Route::get('/motor',[HomeController::class,'motor']);
Route::get('/aksesoris',[HomeController::class,'aksesoris']);
Route::get('/reservasi',[HomeController::class,'reservasi']);
Route::get('/produk/{id}',[HomeController::class,'showProduk']);
Route::get('/checkout',[HomeController::class,'checkout']);


//DASHBOARD

# Dashboard Page
Route::get('/dashboard',[dasboardController::class,'index']);

# Produk
Route::get('/daftar-produk',[ProductController::class,'index'])->name('Daftar Produk');
Route::get('/form-produk',[ProductController::class,'formProduct']);
Route::post('/insert-produk',[ProductController::class,'insertProduk']);