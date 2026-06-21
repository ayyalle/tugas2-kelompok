<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Restaurants ALTRYDZA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
              
        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            background: linear-gradient(-45deg, #FFD6E8, #D6EFFF, #E8D6FF, #FFC8DD);
            padding: 60px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: #7A5CFA;
            font-size: 38px;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        .subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 45px;
            text-align: center;
        }

        /* Tombol Tambah Restoran khusus Admin */
        .admin-action {
            margin-bottom: 25px;
        }
        .btn-add {
            display: inline-block;
            text-decoration: none;
            color: white;
            background: #7A5CFA;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }
        .btn-add:hover {
            background: #5b3fd1;
            transform: translateY(-2px);
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            max-width: 1000px;
            margin-bottom: 40px;
            animation: muncul 0.8s ease;
        }

        @keyframes muncul {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Kartu Menu Estetik  */
        .card {
            width: 280px;
            background: rgba(255, 255, 255, 0.55);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 35px 25px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(122, 92, 250, 0.08), 0 4px 12px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.4);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), background 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.85);
            box-shadow: 0 15px 30px rgba(122, 92, 250, 0.15), 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        /* Garis warna warni otomatis */
        .card { border-top: 5px solid #C084FC; }
        .card:nth-child(2n) { border-top: 5px solid #FF8FC7; }
        .card:nth-child(3n) { border-top: 5px solid #7DB9FF; }

        .icon {
            font-size: 55px;
            margin-bottom: 15px;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .card:hover .icon {
            transform: scale(1.18) rotate(5deg);
        }

        h2 {
            font-size: 22px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .rating {
            font-size: 14px;
            color: #ffa41c;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .alamat {
            font-size: 13px;
            color: #666;
            margin-bottom: 15px;
        }

        /* Tombol Aksi Hapus Khusus Admin */
        .btn-delete {
            background: #ffcbd1;
            color: #dc3545;
            border: none;
            padding: 5px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 10px;
        }
        .btn-delete:hover {
            background: #dc3545;
            color: white;
        }

        .back-container {
            margin-top: 20px;
        }

        .btn-back {
            display: inline-block;
            text-decoration: none;
            color: #7A5CFA;
            background: rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(122, 92, 250, 0.3);
            padding: 12px 30px;
            border-radius: 15px;
            font-weight: bold;
            font-size: 15px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: white;
            transform: translateX(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .image-container {
            width: 100%;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
            overflow: hidden;
            border-radius: 15px; /* Biar sudut fotonya tumpul manis */
        }

        .food-img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Memotong gambar secara proporsional agar pas di kotak */
        }
        /* Taruh ini di dalam tag <style> di bagian atas halaman */
        .btn-pesan-langsung {
            display: block; 
            text-align: center; 
            padding: 12px 30px; 
            background: linear-gradient(135deg, #FF8FC7, #FFB5D8); 
            color: white; 
            text-decoration: none; 
            font-weight: bold; 
            border-radius: 15px; 
            margin-top: 10px; 
            box-shadow: 0 4px 10px rgba(255, 143, 199, 0.3); 
            transition: 0.3s;
        }

        .btn-pesan-langsung:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 143, 199, 0.5);
        }
      
    </style>

</head>
<body>

<h1>🍱 Menu Restaurants</h1>
<p class="subtitle">Daftar hidangan lezat dan segar di Restoran ALTRYDZA</p>

{{-- @if(auth()->check() && auth()->user()->role === 'admin') --}}
    {{-- <div class="admin-action">
        <a href="{{ route('restaurant.create') }}" class="btn-add">+ Tambah Restoran Baru</a>
    </div> --}}
{{-- @endif --}}

<div class="container">
    
    @foreach($restaurants as $resto)
        <div class="card">
            <div class="image-container">
    @if($resto->image && File::exists(public_path('images/' . $resto->image)))
        <img src="{{ asset('images/' . $resto->image) }}" alt="{{ $resto->name }}" class="food-img">
    @else
        <span class="icon">🏪</span>
    @endif
       </div>
            
            <h2>{{ $resto->name }}</h2>
            
            <p class="rating">⭐ {{ $resto->rating ?? '0.0' }}</p>
            
            <p class="alamat">{{ $resto->address }}</p>

            <p class="fw-bold" style="font-weight: bold; color: #28a745; margin-top: 5px; font-size: 15px;">
    Rp {{ number_format($resto->price, 0, ',', '.') }}
</p>

            @if(auth()->check() && auth()->user()->role === 'admin')
                <form action="{{ route('restaurant.destroy', $resto->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus restoran ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Hapus</button>
                </form>
            @endif
        </div>
    @endforeach

</div>
    <a href="{{ url('/pesanan') }}" class="btn-pesan-langsung">
        🛒 Pesan Sekarang
    </a>
<div class="back-container">
    <a href="/" class="btn-back">← Kembali ke Home</a>
</div>

</body>
</html>