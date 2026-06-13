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
}