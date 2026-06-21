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
        return redirect('/restoran')->with('success', 'Menu berhasil ditambahkan!');
    }

    // 3. Update Data via API (PUT)
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
        return view('restoran', compact('restaurants'));
    }

    // 7. Tampilkan Form Tambah Restoran (Web Blade)
    public function create()
    {
        return view('restaurant_create');
    }
}