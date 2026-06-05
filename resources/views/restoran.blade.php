<!DOCTYPE html>
<html>
<head>
    <title>Menu Restaurants</title>
    <style>
        body{
            font-family:Segoe UI,sans-serif;
            background:#FFF5E4;
            padding:40px;
        }

        h1{
            text-align:center;
            color:#FF7AA2;
        }

        .container{
            display:flex;
            justify-content:center;
            gap:20px;
            flex-wrap:wrap;
        }

        .card{
            width:250px;
            background:white;
            padding:20px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .card:nth-child(1){
            background:#FFD6E8;
        }

        .card:nth-child(2){
            background:#D6F6FF;
        }

        .card:nth-child(3){
            background:#E9D5FF;
        }
        .card:nth-child(4){
            background:#d8f3dc;
        }
        .card:nth-child(5){
             background:#fff3b0;
        }
        .card:nth-child(6){
            background: #ad8f62;
        }
        

        .harga{
            font-size:20px;
            font-weight:bold;
            color:#444;
        }

        a{
            text-decoration:none;
            color:white;
            background:#A78BFA;
            padding:10px 20px;
            border-radius:10px;
        }

        .back{
            text-align:center;
            margin-top:30px;
        }
    </style>
</head>
<body>

<h1>🍜 Menu Restaurants</h1>

<div class="container">
    <div class="card">
        <h2>🍚 Nasi Goreng</h2>
        <p class="harga">Rp20.000</p>
    </div>

    <div class="card">
        <h2>🍜 Mie Ayam</h2>
        <p class="harga">Rp15.000</p>
    </div>

    <div class="card">
        <h2>🍲 Bakso</h2>
        <p class="harga">Rp18.000</p>
    </div>

    <div class="card">
        <h2>🧋 Matcha Latte</h2>
        <p class="harga">Rp18.000</p>
    </div>

    <div class="card">
        <h2>🍹 Es Jeruk</h2>
        <p class="harga">Rp8.000</p>
    </div>

    <div class="card">
        <h2>🥤 Es Teh</h2>
        <p class="harga">Rp5.000</p>
    </div>
</div>

</body>
</html>