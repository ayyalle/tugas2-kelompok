<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Import semua controller kelompok kalian di sini
use App\Http\Controllers\FoodController; 
use App\Http\Controllers\RestaurantController; 
use App\Http\Controllers\OrderController; 
use App\Models\Restaurant;

// Halaman utama (Home)
Route::get('/', [FoodController::class, 'home']);

// Halaman Dashboard setelah login
Route::get('/dashboard', function () {
    $restaurants = Restaurant::all();
    return view('dashboard', compact('restaurants'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua rute yang HARUS LOGIN dimasukkan ke dalam grup ini
Route::middleware('auth')->group(function () {
    
    // Rute Profile (Bawaan Laravel)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // RUTE CRUD OTOMATIS (Milik Kelompok)
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

// --- BAGIAN RUTE PUBLIK (YANG SUDAH DISATUKAN TANPA KONFLIK) ---

// Halaman publik untuk melihat daftar restoran (Mengarahkan ke RestaurantController)
Route::get('/restoran', [RestaurantController::class, 'tampilkanWeb'])->name('restoran');

// Halaman pesanan umum
Route::get('/pesanan', [FoodController::class, 'pesanan'])->name('pesanan');

// Halaman untuk memesan dari restoran tertentu berdasarkan ID
Route::get('/restaurant/order/{id}', [FoodController::class, 'order'])->name('restaurant.order');