<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Form Tambah Menu (Admin)</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="<?php echo e(route('restaurant.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?> <div class="mb-3">
                                <label for="name" class="form-label">Nama Menu</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">URL Gambar / Nama File</label>
                                <input type="text" name="image" class="form-control" placeholder="contoh: resto-a.jpg">
                            </div>

                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="number" step="0.1" name="rating" class="form-control" placeholder="contoh: 4.5">
                            </div>
                            <div class="input-group" style="margin-bottom: 15px;">
                                <label for="price" style="font-weight: 600; display: block; margin-bottom: 8px;">Harga Menu</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan harga menu (contoh: 15000)" required style="width: 100%; padding: 14px; border: 2px solid rgba(122, 92, 250, 0.2); border-radius: 12px; outline: none; background: rgba(255, 255, 255, 0.8);">
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea name="address" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Simpan ke Database</button>
                                <a href="<?php echo e(route('restaurant.index')); ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp new\htdocs\tugas2-kelompok\resources\views/restaurant_create.blade.php ENDPATH**/ ?>