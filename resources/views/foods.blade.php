<!DOCTYPE html>
<html>
<head>
    <title>Pesanan</title>
    <style>
        body{
            font-family:Segoe UI,sans-serif;
            background:linear-gradient(135deg,#D6F6FF,#FFD6E8);
            height:150vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .box{
            background:white;
            width:1200px;
            padding:30px;
            border-radius:25px;
            box-shadow:0 10px 30px rgba(0,0,0,0.1);
        }

        h1{
            color:#7A5CFA;
            text-align:center;
        }

        input,select{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:15px;
            border:2px solid #E5E7EB;
            border-radius:10px;
        }

        button{
            width:100%;
            padding:12px;
            background:#FFB5D8;
            border:none;
            border-radius:10px;
            color:white;
            font-size:16px;
            font-weight:bold;
        }

        a{
            display:block;
            text-align:center;
            margin-top:15px;
            text-decoration:none;
            color:#7A5CFA;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>🛒 Form Pesanan</h1>

<input type="text" placeholder="Nama Pelanggan">

<h3>Menu Makanan</h3>

<label>Nasi Goreng</label>
<input type="number" min="0" placeholder="Jumlah">

<label>Mie Ayam</label>
<input type="number" min="0" placeholder="Jumlah">

<label>Bakso</label>
<input type="number" min="0" placeholder="Jumlah">

<h3>Menu Minuman</h3>

<label>Matcha Latte</label>
<input type="number" min="0" placeholder="Jumlah">

<label>Es Teh</label>
<input type="number" min="0" placeholder="Jumlah">

<label>Es Jeruk</label>
<input type="number" min="0" placeholder="Jumlah">

<button>Pesan Sekarang</button>

    <a href="/">← Kembali ke Home</a>
</div>

</body>
</html>