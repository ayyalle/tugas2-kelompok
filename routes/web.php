<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FoodController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/restaurants', [RestaurantController::class, 'index']);

Route::get('/foods', [FoodController::class, 'index']);

Route::get('/home', [FoodController::class, 'home']);
Route::get('/restoran', [FoodController::class, 'restoran']);
Route::get('/pesanan', [FoodController::class, 'pesanan']);
?>