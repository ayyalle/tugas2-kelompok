<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController; 

// Rute Tampil Data dibuat BEBAS (Siapa saja bisa lihat restoran)
Route::get('/restaurants', [RestaurantController::class, 'index']);

// Rute Login API (Bisa diakses tanpa login)
Route::post('/login-api', [RestaurantController::class, 'loginAPI']);

// Rute yang wajib LOGIN ADMIN (Dibungkus middleware auth:sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/restaurants', [RestaurantController::class, 'store']);
    Route::put('/restaurants/{id}', [RestaurantController::class, 'update']);
    
    // Tambahkan rute logout di dalam sini
    Route::post('/logout-api', [RestaurantController::class, 'logoutAPI']);
});