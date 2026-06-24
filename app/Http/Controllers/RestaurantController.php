<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    // 1. Tampil Data untuk API
    public function index()
    {
        $restoran = Restaurant::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data restoran berhasil diambil',
            'data' => $restoran
        ], 200);
    }

    // 2. Fungsi Store Tunggal (Bisa untuk API Postman & Form Web)
    public function store(Request $request)
    {
        // Validasi data inputan
        $request->validate([
            'name'    => 'required',
            'address' => 'required',
            'price'   => 'required|numeric',
        ]);

        // Simpan ke Database
        $restaurant = new Restaurant();
        $restaurant->name    = $request->name;
        $restaurant->address = $request->address;
        $restaurant->rating  = $request->rating ?? 0;
        $restaurant->price   = $request->price;
        $restaurant->image   = $request->image; 
        $restaurant->save();

        // JIKA DIARSIPKAN LEWAT WEB (Minta halaman HTML/Redirect)
        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data menu restoran berhasil ditambahkan via API!',
                'data' => $restaurant
            ], 201);
        }

        // JIKA DIINPUT LEWAT WEB BLADE
        return redirect('/dashboard')->with('success', 'Menu berhasil ditambahkan!');
    }

    // 3. Update Data (Mendukung API JSON & Form Web Blade)
    public function update(Request $request, $id)
    {
        $restoran = Restaurant::find($id);

        if (!$restoran) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Data tidak ditemukan'
                ], 404);
            }
            return redirect('/dashboard')->with('error', 'Data tidak ditemukan');
        }

        $restoran->update([
            'name'    => $request->name,
            'image'   => $request->image,
            'rating'  => $request->rating,
            'address' => $request->address,
            'price'   => $request->price,
        ]);

        // Jika request dari API
        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data menu restoran berhasil diubah!',
                'data' => $restoran
            ], 200);
        }

        // Jika request dari form Web biasa
        return redirect('/dashboard')->with('success', 'Data restoran berhasil diubah!');
    }

    // 4. Login API Admin
    public function loginAPI(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email atau password salah!'
            ], 401);
        }

        $token = $user->createToken('admin-token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Login Admin Berhasil!',
            'token' => $token,
            'user' => $user
        ], 200);
    }

    // 5. Logout API Admin
    public function logoutAPI(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil logout, token telah dihapus!'
        ], 200);
    }

    // 6. Tampilkan Halaman Daftar Menu (Web Blade)
    public function tampilkanWeb()
    {
        $restaurants = Restaurant::all(); 
        return view('dashboard', compact('restaurants'));
    }

    // 7. Tampilkan Form Tambah Restoran (Web Blade)
    public function create()
    {
        return view('restaurant_create');
    }

    // ==========================================
    // TAMBAHAN BARU: FUNGSI UNTUK HALAMAN WEB BLADE
    // ==========================================

    // 8. Menampilkan Form Edit Restoran
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        
        // Membuka view form edit (pastikan nama filenya sesuai, misalnya restaurant_edit.blade.php)
        return view('restaurant_edit', compact('restaurant'));
    }

    // 9. Menghapus Data Restoran via Web
    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();

        return redirect('/dashboard')->with('success', 'Restoran berhasil dihapus!');
    }
}