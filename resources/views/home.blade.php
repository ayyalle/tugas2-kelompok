<!DOCTYPE html>
<html>
<head>
    <title>Home - Restoran ALTRYDZA</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Segoe UI',sans-serif;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            /* Gradasi tetap dipertahankan, efek animasi bergerak dihapus */
            background:linear-gradient(
                -45deg,
                #FFD6E8,
                #D6EFFF,
                #E8D6FF,
                #FFC8DD
            );
        }

        .card{
            width:550px;
            padding:45px;
            text-align:center;

            background:rgba(255,255,255,0.65);
            backdrop-filter:blur(12px);

            border-radius:30px;

            box-shadow:
            0 15px 35px rgba(122,92,250,0.2),
            0 5px 15px rgba(0,0,0,0.08);

            animation:muncul 1s ease;
        }

        @keyframes muncul{
            from{
                opacity:0;
                transform:translateY(40px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        .logo{
            font-size:70px;
            margin-bottom:10px;
            animation:float 3s ease-in-out infinite;
        }

        @keyframes float{
            0%,100%{
                transform:translateY(0);
            }
            50%{
                transform:translateY(-10px);
            }
        }

        h1{
            color:#7A5CFA;
            font-size:38px;
            margin-bottom:10px;
        }

        p{
            color:#555;
            font-size:18px;
            margin-bottom:35px;
        }

        .btn{
            display:inline-block;
            margin:10px;
            padding:14px 30px;
            border-radius:15px;
            text-decoration:none;
            color:white;
            font-weight:bold;
            font-size:16px;
            transition:0.3s;
        }

        .menu{
            background:linear-gradient(
                135deg,
                #FF8FC7,
                #FFB5D8
            );
            box-shadow:0 8px 20px rgba(255,143,199,0.4);
        }

        .pesanan{
            background:linear-gradient(
                135deg,
                #7DB9FF,
                #A0C4FF
            );
            box-shadow:0 8px 20px rgba(125,185,255,0.4);
        }

        .btn:hover{
            transform:translateY(-5px) scale(1.05);
        }

        .menu:hover{
            box-shadow:0 12px 25px rgba(255,143,199,0.6);
        }

        .pesanan:hover{
            box-shadow:0 12px 25px rgba(125,185,255,0.6);
        }

        .footer{
            margin-top:30px;
            color:#888;
            font-size:14px;
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="logo">🍽️</div>

        <h1>Selamat Datang</h1>

        <p>
            Nikmati berbagai hidangan terbaik di
            <b>Restoran ALTRYDZA</b>
        </p>

        <a href="/restoran" class="btn menu">
            📖 Lihat Menu
        </a>

        <a href="/pesanan" class="btn pesanan">
            🛒 Pesanan
        </a>

        <div class="footer">
            ✨ Lezat • Cepat • Terpercaya ✨
        </div>

    </div>

</body>
</html>