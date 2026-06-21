<div style="
    background: linear-gradient(135deg, #e0f2fe 0%, #fce7f3 100%);
    padding: 30px 20px 60px 20px;
    min-height: 100vh;
    box-sizing: border-box;
">

    <div style="
        max-width: 1200px;
        margin: 0 auto 30px auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    ">
        <h2 style="
            margin: 0;
<<<<<<< HEAD
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

@if(auth()->check() && auth()->user()->role === 'admin')
    <div class="admin-action">
        <a href="{{ route('restaurant.create') }}" class="btn-add">+ Tambah Restoran Baru</a>
=======
            font-size: 24px;
            font-weight: 800;
            background: linear-gradient(135deg, #1e40af 0%, #db2777 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        ">
            Menu Restaurants
        </h2>

    </div>

    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        max-width: 1200px;
        margin: 0 auto 50px auto;
        gap: 30px;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    ">


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

    @foreach($restaurants as $restaurant)

    <div class="restaurant-card" style="
        background: #ffffff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.08), 0 10px 25px rgba(219, 39, 119, 0.08);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(219, 39, 119, 0.15);
        position: relative;
    ">

        <div style="
            width: 100%; 
            height: 230px; 
            overflow: hidden; 
            position: relative;
            background: linear-gradient(135deg, #1e40af 0%, #db2777 100%);
        ">
            <div style="
                position: absolute;
                top: 0; left: 0; width: 100%; height: 100%;
                background: linear-gradient(to bottom, transparent 40%, rgba(0, 0, 0, 0.4));
                z-index: 1;
            "></div>
            
            <img src="{{ asset($restaurant->image) }}"
                 alt="{{ $restaurant->name }}"
                 style="
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    position: relative;
                    z-index: 0;
                    opacity: 0.9;
                 ">

        </div>

        <div style="padding: 22px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h4 style="
                    margin: 0 0 10px 0;
                    font-size: 20px;
                    font-weight: 700;
                    color: #0f172a;
                    line-height: 1.4;
                    display: -webkit-box;
                    -webkit-line-clamp: 1;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                ">
                    {{ $restaurant->name }}
                </h4>

                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span style="
                        color: #be185d;
                        font-size: 13px;
                        font-weight: 700;
                        background: #fce7f3;
                        padding: 4px 12px;
                        border-radius: 30px;
                        display: inline-flex;
                        align-items: center;
                        gap: 4px;
                    ">
                        ⭐ {{ number_format($restaurant->rating, 1) }}
                    </span>
                    
                    <span style="
                        color: #1d4ed8;
                        font-size: 18px;
                        font-weight: 700;
                    ">
                        Rp{{ number_format($restaurant->price, 0, ',', '.') }}
                    </span>
                </div>

                <p style="
                    font-size: 13.5px;
                    color: #475569;
                    margin: 0;
                    line-height: 1.5;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    height: 40px;
                ">
                    📍 {{ $restaurant->address }}
                </p>
            </div>
        </div>

    </div>

    @endforeach

    </div>

    <div style="
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    ">
        <a href="/" 
           style="
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: #ffffff;
                color: #1e40af;
                border: 2px solid rgba(30, 64, 175, 0.2);
                padding: 14px 28px;
                border-radius: 14px;
                font-size: 14px;
                font-weight: 700;
                text-decoration: none;
                box-shadow: 0 4px 12px rgba(30, 64, 175, 0.05);
                transition: all 0.2s ease;
           "
           onmouseover="this.style.background='#1e40af'; this.style.color='#ffffff'; this.style.transform='translateY(-2px)';"
           onmouseout="this.style.background='#ffffff'; this.style.color='#1e40af'; this.style.transform='translateY(0)';"
        >
            <span>🏠</span> Kembali ke Home
        </a>

        
        </a>
    </div>

</div>

<style>
    @media (min-width: 992px) {
        div[style*="grid-template-columns"] {
            grid-template-columns: repeat(3, 1fr) !important;
        }
    }
    
    .restaurant-card:hover {
        transform: translateY(-8px);
        border-color: rgba(219, 39, 119, 0.4) !important;
        box-shadow: 0 20px 35px rgba(37, 99, 235, 0.15), 0 20px 35px rgba(219, 39, 119, 0.15) !important;
    }
</style>