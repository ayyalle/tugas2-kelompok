<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan - Restoran ALTRYDZA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(-45deg, #FFD6E8, #D6EFFF, #E8D6FF, #FFC8DD);
            background-size: 400% 400%;
            animation: gradient 10s ease infinite;
            padding: 20px;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .box {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            width: 100%;
            max-width: 950px;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(122, 92, 250, 0.15), 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.4);
            animation: muncul 0.8s ease;
        }

        @keyframes muncul {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #7A5CFA;
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
        }

        .form-container {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 30px;
        }

        @media (max-width: 768px) {
            .form-container {
                grid-template-columns: 1fr;
            }
        }

        .section-title {
            color: #555;
            font-size: 18px;
            font-weight: bold;
            margin: 25px 0 15px 0;
            padding-bottom: 5px;
            border-bottom: 2px solid rgba(122, 92, 250, 0.2);
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: 600;
            color: #444;
            font-size: 14px;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 14px;
            border: 2px solid rgba(122, 92, 250, 0.2);
            border-radius: 12px;
            outline: none;
            font-size: 15px;
            background: rgba(255, 255, 255, 0.8);
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #7A5CFA;
            box-shadow: 0 0 10px rgba(122, 92, 250, 0.2);
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.5);
            padding: 12px 20px;
            border-radius: 12px;
            margin-bottom: 10px;
            border: 1px solid rgba(255, 255, 255, 0.6);
            transition: 0.2s;
        }

        .menu-item:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(5px);
        }

        .menu-info {
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        .menu-name {
            font-weight: 600;
            color: #333;
        }

        .menu-price {
            font-size: 13px;
            color: #7A5CFA;
            font-weight: bold;
            margin-top: 2px;
        }

        .subtotal-area {
            font-size: 13px;
            color: #ff7ebb;
            font-weight: bold;
            text-align: right;
            margin-right: 15px;
            min-width: 80px;
        }

        input[type="number"] {
            width: 70px;
            padding: 8px;
            border: 2px solid rgba(229, 231, 235, 0.8);
            border-radius: 8px;
            text-align: center;
            outline: none;
            font-weight: bold;
            color: #333;
        }

        .checkout-box {
            background: rgba(255, 255, 255, 0.7);
            padding: 30px;
            border-radius: 25px;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(255, 255, 255, 0.5);
            height: fit-content;
            box-shadow: 0 10px 20px rgba(0,0,0,0.02);
        }

        .checkout-box h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 18px;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 10px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 15px;
            color: #555;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            margin-bottom: 25px;
            font-size: 20px;
            font-weight: bold;
            color: #7A5CFA;
            border-top: 2px solid rgba(122, 92, 250, 0.2);
            padding-top: 15px;
        }

        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #FF8FC7, #FFB5D8);
            border: none;
            border-radius: 15px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(255, 143, 199, 0.4);
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(255, 143, 199, 0.6);
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #7A5CFA;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
        }

        .back-link:hover {
            color: #5b3cc4;
            transform: translateX(-3px);
        }
    </style>
</head>
<body>

<div class="box">
    <h1>🛒 Form Pesanan</h1>

    <div class="form-container">
        
        <div class="main-form">
            <div class="input-group">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" id="nama" placeholder="Masukkan nama Anda...">
            </div>

            <div class="section-title">🍱 Daftar Menu Restoran</div>
            
            <?php if($restaurants->isEmpty()): ?>
                <p style="text-align: center; color: #888; font-style: italic;">Belum ada menu yang ditambahkan. Silakan tambah menu terlebih dahulu!</p>
            <?php else: ?>
                <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="menu-item">
                        <div class="menu-info">
                            <span class="menu-name"><?php echo e($menu->name); ?></span> 
                            <span class="menu-price">Rp <?php echo e(number_format($menu->price, 0, ',', '.')); ?></span>
                        </div>
                        <span class="subtotal-area"></span>
                        <input type="number" class="menu-input" data-price="<?php echo e($menu->price); ?>" min="0" value="0">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div> <div class="checkout-box">
            <h3>📋 Ringkasan Pesanan</h3>
            
            <div class="price-row">
                <span>Total Item</span>
                <span id="total-item">0 porsi</span>
            </div>
            
            <div class="total-row">
                <span>Total Harga</span>
                <span id="total-harga">Rp 0</span>
            </div>

            <button type="button" id="btn-pesan">🚀 Pesan Sekarang</button>
            <a href="/" class="back-link">← Kembali ke Home</a>
        </div>

    </div> </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let inputs = document.querySelectorAll('.menu-input');
        let btnPesan = document.getElementById('btn-pesan');

        // Fungsi Menghitung Total
        function hitungTotal() {
            let totalHarga = 0;
            let totalItem = 0;

            inputs.forEach(input => {
                let jumlah = parseInt(input.value) || 0;
                let harga = parseInt(input.getAttribute('data-price'));
                let subtotal = jumlah * harga;
                
                totalItem += jumlah;
                totalHarga += subtotal;

                let subtotalElement = input.previousElementSibling;
                if (jumlah > 0) {
                    subtotalElement.innerText = "Rp " + subtotal.toLocaleString('id-ID');
                } else {
                    subtotalElement.innerText = "";
                }
            });

            document.getElementById('total-item').innerText = totalItem + " porsi";
            document.getElementById('total-harga').innerText = "Rp " + totalHarga.toLocaleString('id-ID');
        }

        // Jalankan fungsi hitung otomatis setiap kali input angka diubah
        inputs.forEach(input => {
            input.addEventListener('input', hitungTotal);
        });

        // Jalankan fungsi verifikasi saat tombol pesanan diklik
        btnPesan.addEventListener('click', function () {
            let nama = document.getElementById('nama').value.trim();
            let totalHarga = document.getElementById('total-harga').innerText;

            if (nama === "") {
                alert("Silakan masukkan Nama Pelanggan terlebih dahulu!");
            } else if (totalHarga === "Rp 0") {
                alert("Anda belum memilih menu apa pun!");
            } else {
                alert("Terima kasih " + nama + "!\nPesanan Anda telah diproses.\nTotal Tagihan: " + totalHarga);
            }
        });
    });
</script>

</body>
</html><?php /**PATH C:\xampp new\htdocs\tugas2-kelompok\resources\views/pesanan.blade.php ENDPATH**/ ?>