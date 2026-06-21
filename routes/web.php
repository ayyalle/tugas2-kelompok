<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 1. Import semua controller kelompok kalian di sini
use App\Http\Controllers\FoodController; // Ini untuk bagian HOME
use App\Http\Controllers\RestaurantController; // Ini untuk bagian RESTORAN
use App\Http\Controllers\OrderController; // Ini untuk bagian PESANAN

// Halaman utama sebelum login (jika ada)
Route::get('/', [FoodController::class, 'home']);

// Halaman Dashboard setelah login
use App\Models\Restaurant;

Route::get('/dashboard', function () {

    $restaurants = Restaurant::all();

    return view('dashboard', compact('restaurants'));

})->middleware(['auth', 'verified'])->name('dashboard');

// Semua rute yang harus LOGIN dulu dimasukkan ke dalam grup ini
Route::middleware('auth')->group(function () {
    
    // Rute Profile (Bawaan Laravel)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 2. RUTE CRUD RESOURCE UNTUK KELOMPOK KALIAN
    // Ini otomatis membuat URL /restaurant, /restaurant/create, /restaurant/edit, dll
    Route::resource('restaurant', RestaurantController::class);
    
    // Ini otomatis membuat URL /order untuk bagian pesanan nanti
    Route::resource('order', OrderController::class);
    
});

require __DIR__.'/auth.php';

Route::get('/restoran', [FoodController::class, 'restoran'])->name('restoran');
Route::get('/pesanan', [FoodController::class, 'pesanan'])->name('pesanan');

Route::get('/restoran', [RestaurantController::class, 'tampilkanWeb']); 

Route::get('/restaurant/order/{id}', [FoodController::class, 'order'])->name('restaurant.order');
 