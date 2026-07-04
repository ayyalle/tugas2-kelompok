<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 1. Import kedua model ini di bagian atas agar Laravel tahu tabel mana yang mau diambil
use App\Models\Restaurant; 
use App\Models\Order;

class FoodController extends Controller
{
    public function index()
    {
        return view('foods');
    }

    public function home()
    {
        return view('home');
    }

    public function restoran()
    {
        // 2. Ambil semua data dari tabel restoran kelompokmu
        $restaurants = Restaurant::all(); 

        // 3. Kirim variabel $restaurants ke file restoran.blade.php
        return view('restoran', compact('restaurants'));
    }

    public function pesanan()
    {
        // Kita ambil data menu dari tabel restaurants
        $restaurants = Restaurant::all();

        // Kirim datanya ke view pesanan
        return view('pesanan', compact('restaurants'));
    }

    /**
     * PERBAIKAN: Menambahkan fungsi order() yang dicari oleh Route
     * Fungsi ini bertugas mengambil 1 data restoran berdasarkan ID yang diklik
     */
    public function order($id)
    {
        // 1. Ambil semua data restoran karena file pesanan.blade.php membutuhkannya ($restaurants)
        $restaurants = Restaurant::all();

        // 2. Ambil data 1 restoran spesifik yang sedang diklik berdasarkan ID ($restaurant)
        $restaurant = Restaurant::findOrFail($id);

        // 3. Kirim KEDUA variabel tersebut ke halaman view pesanan
        return view('pesanan', compact('restaurants', 'restaurant'));
    }   
}