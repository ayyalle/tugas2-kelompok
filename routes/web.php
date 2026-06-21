<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Import semua controller kelompok kalian di sini
use App\Http\Controllers\FoodController; 
use App\Http\Controllers\RestaurantController; 
use App\Http\Controllers\OrderController; 

// Halaman utama (Home)
Route::get('/', [FoodController::class, 'home']);

// Halaman Dashboard setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua rute yang HARUS LOGIN dimasukkan ke dalam grup ini
Route::middleware('auth')->group(function () {
    
    // Rute Profile (Bawaan Laravel)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // RUTE CRUD AUTOMATIS (Milik Kelompok)
    // Ini otomatis membuat URL /restaurant/create dengan rute POST mengarah ke storeWeb secara otomatis!
    Route::resource('restaurant', RestaurantController::class)->names([
        'index'   => 'restaurant.index',
        'create'  => 'restaurant.create',
        'store'   => 'restaurant.store',
        'destroy' => 'restaurant.destroy',
    ]);
    
    // Ini otomatis membuat URL /order untuk bagian pesanan nanti
    Route::resource('order', OrderController::class);
});

require __DIR__.'/auth.php';

// Halaman publik untuk melihat daftar restoran
Route::get('/restoran', [RestaurantController::class, 'tampilkanWeb'])->name('restoran');
Route::get('/pesanan', [FoodController::class, 'pesanan'])->name('pesanan');