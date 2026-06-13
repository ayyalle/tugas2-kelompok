<?php

namespace App\Http\Controllers;

use App\Models\Restaurant; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    // MENAMPILKAN SEMUA DATA
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restoran', compact('restaurants')); 
    }

    // HALAMAN FORM TAMBAH DATA
    public function create()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Hanya Admin yang boleh menambah data!');
        }
        return view('restaurant_create'); 
    }

    // PROSES SIMPAN DATA BARU KE DATABASE
    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin') { abort(403); }

        // 1. Tambahkan price, image, dan rating ke dalam validasi wajib
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'rating' => 'required|numeric',
            'address' => 'required',
            'price' => 'required|numeric', // <-- WAJIB ADA INI
        ]);

        // 2. Karena sudah divalidasi, ini aman menyimpan semua input termasuk price
        Restaurant::create($request->all());

        return redirect()->route('restaurant.index')->with('success', 'Restoran berhasil ditambahkan!');
    }

    // HALAMAN FORM EDIT DATA
    public function edit($id)
    {
        if (Auth::user()->role !== 'admin') { abort(403); }

        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant_edit', compact('restaurant')); 
    }

    // PROSES UPDATE/UBAH DATA DI DATABASE
    public function update(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin') { abort(403); }

        // 3. Update juga validasi untuk proses edit biar price ikut tersimpan kalau diubah
        $request->validate([
            'name' => 'required',
            'image' => 'nullable',   
            'rating' => 'nullable|numeric',
            'address' => 'required',
            'price' => 'nullable|numeric', // <-- Tambahkan ini di bagian update
        ]);

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($request->all());

        return redirect()->route('restaurant.index')->with('success', 'Data restoran berhasil diubah!');
    }

    // PROSES HAPUS DATA DARI DATABASE
    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin') { abort(403); }

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        return redirect()->route('restaurant.index')->with('success', 'Restoran berhasil dihapus!');
    }
}