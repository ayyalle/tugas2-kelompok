<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Restoran</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#FFD6E8,#D6EFFF,#E8D6FF);
        }

        .container{
            width:450px;
            background:white;
            padding:35px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.1);
        }

        h2{
            text-align:center;
            color:#6C63FF;
            margin-bottom:25px;
        }

        .form-group{
            margin-bottom:15px;
        }

        label{
            display:block;
            margin-bottom:6px;
            color:#555;
            font-weight:600;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #ddd;
            border-radius:10px;
            outline:none;
            transition:0.3s;
        }

        input:focus{
            border-color:#6C63FF;
            box-shadow:0 0 10px rgba(108,99,255,0.2);
        }

        .btn{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#6C63FF;
            color:white;
            font-size:16px;
            cursor:pointer;
            transition:0.3s;
        }

        .btn:hover{
            background:#574bdb;
            transform:translateY(-2px);
        }

        .back{
            display:block;
            text-align:center;
            margin-top:15px;
            text-decoration:none;
            color:#6C63FF;
            font-weight:600;
        }

        .back:hover{
            text-decoration:underline;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>✏️ Edit Data Restoran</h2>

    <form action="<?php echo e(route('restaurant.update', $restaurant->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label>Nama Restoran</label>
            <input type="text" name="name" value="<?php echo e($restaurant->name); ?>">
        </div>

        <div class="form-group">
            <label>Nama File Gambar</label>
            <input type="text" name="image" value="<?php echo e($restaurant->image); ?>">
        </div>

        <div class="form-group">
            <label>Rating</label>
            <input type="number" step="0.1" name="rating" value="<?php echo e($restaurant->rating); ?>">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="address" value="<?php echo e($restaurant->address); ?>">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="price" value="<?php echo e($restaurant->price); ?>">
        </div>

        <button type="submit" class="btn">
            💾 Update Data
        </button>
    </form>

    <a href="<?php echo e(route('restaurant.index')); ?>" class="back">
        ← Kembali ke Menu
    </a>

</div>

</body>
</html>

<?php /**PATH C:\Users\dell\tugas2-kelompok\resources\views/restaurant_edit.blade.php ENDPATH**/ ?>