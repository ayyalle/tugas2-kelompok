<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body{
            margin:0;
            font-family:Segoe UI,sans-serif;
            background:linear-gradient(135deg,#FFD6E8,#D6EFFF,#E8D6FF);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .card{
            background:white;
            padding:40px;
            border-radius:25px;
            text-align:center;
            width:500px;
            box-shadow:0 10px 30px rgba(0,0,0,0.1);
        }

        h1{
            color:#7A5CFA;
        }

        p{
            color:#666;
        }

        .btn{
            display:inline-block;
            margin:10px;
            padding:12px 25px;
            border-radius:12px;
            text-decoration:none;
            color:white;
            font-weight:bold;
        }

        .menu{
            background:#FFB5D8;
        }

        .pesanan{
            background:#A0C4FF;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🍽️ Selamat Datang</h1>
        <p>Di Restoran ALTRYDZA</p>

        <a href="/restoran" class="btn menu">Lihat Menu</a>
        <a href="/pesanan" class="btn pesanan">Pesanan</a>
    </div>
</body>
</html>