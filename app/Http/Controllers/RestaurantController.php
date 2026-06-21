<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    // Standar PDF: index() untuk Tampil Data
    public function index()
    {
        $restoran = Restaurant::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data restoran berhasil diambil',
            'data' => $restoran
        ], 200);
    }

    // Standar PDF: store() untuk Tambah Data (POST)
    public function store(Request $request)
    {
        $restoran = Restaurant::create([
            'name'    => $request->name,
            'image'   => $request->image,
            'rating'  => $request->rating,
            'address' => $request->address,
            'price'   => $request->price,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data menu restoran berhasil ditambahkan!',
            'data' => $restoran
        ], 201);
    }

    // Standar PDF: update() untuk Ubah Data (PUT)
    public function update(Request $request, $id)
    {
        $restoran = Restaurant::find($id);

        if (!$restoran) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $restoran->update([
            'name'    => $request->name,
            'image'   => $request->image,
            'rating'  => $request->rating,
            'address' => $request->address,
            'price'   => $request->price,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data menu restoran berhasil diubah!',
            'data' => $restoran
        ], 200);
    }


    // ==========================================
    // LANJUTAN: FUNGSI LOGIN ADMIN
    // ==========================================
    public function loginAPI(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user admin berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek apakah user ada dan passwordnya benar
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email atau password salah!'
            ], 401);
        }

        // Buat token manual token teks tanpa crash guard sanctum
        $token = $user->createToken('admin-token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Login Admin Berhasil!',
            'token' => $token,
            'user' => $user
        ], 200);
    }
    public function logoutAPI(Request $request)
{
    // Menghapus token yang sedang digunakan untuk login saat ini
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'status' => 'success',
        'message' => 'Berhasil logout, token telah dihapus!'
    ], 200);
}
        public function tampilkanWeb()
    {
    // Menggunakan nama variabel $restaurants agar cocok dengan @foreach di Blade kamu
    $restaurants = Restaurant::all(); 
    
    return view('restoran', compact('restaurants'));
    }
}