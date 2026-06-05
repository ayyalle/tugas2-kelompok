<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/home', [FoodController::class, 'home']);
Route::get('/restoran', [FoodController::class, 'restoran']);
Route::get('/pesanan', [FoodController::class, 'pesanan']);