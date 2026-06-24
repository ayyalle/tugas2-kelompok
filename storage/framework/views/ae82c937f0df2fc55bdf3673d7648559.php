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
            font-size: 24px;
            font-weight: 800;
            background: linear-gradient(135deg, #1e40af 0%, #db2777 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        ">
            🍱 Menu Restaurants
        </h2>

        <?php if(auth()->check() && auth()->user()->role === 'admin'): ?>
            <div class="admin-action">
                <a href="<?php echo e(route('restaurant.create')); ?>" style="
                    display: inline-block;
                    text-decoration: none;
                    color: white;
                    background: #1e40af;
                    padding: 10px 20px;
                    border-radius: 12px;
                    font-weight: bold;
                    font-size: 14px;
                    transition: 0.3s;
                ">+ Tambah Restoran Baru</a>
            </div>
        <?php endif; ?>
    </div>

    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        max-width: 1200px;
        margin: 0 auto 50px auto;
        gap: 30px;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    ">

    <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                display: flex;
                justify-content: center;
                align-items: center;
            ">
                <div style="
                    position: absolute;
                    top: 0; left: 0; width: 100%; height: 100%;
                    background: linear-gradient(to bottom, transparent 40%, rgba(0, 0, 0, 0.4));
                    z-index: 1;
                "></div>
                
                <?php if($restaurant->image): ?>
                    <img src="<?php echo e(asset('images/' . $restaurant->image)); ?>"
                         alt="<?php echo e($restaurant->name); ?>"
                         style="
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            position: relative;
                            z-index: 0;
                            opacity: 0.9;
                         ">
                <?php else: ?>
                    <span style="font-size: 55px; z-index: 2;">🏪</span>
                <?php endif; ?>
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
                        <?php echo e($restaurant->name); ?>

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
                            ⭐ <?php echo e(number_format($restaurant->rating ?? 0, 1)); ?>

                        </span>
                        
                        <span style="
                            color: #1d4ed8;
                            font-size: 18px;
                            font-weight: 700;
                        ">
                            Rp<?php echo e(number_format($restaurant->price ?? 0, 0, ',', '.')); ?>

                        </span>
                    </div>

                    <p style="
                        font-size: 13.5px;
                        color: #475569;
                        margin: 0 0 15px 0;
                        line-height: 1.5;
                        display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        height: 40px;
                    ">
                        📍 <?php echo e($restaurant->address); ?>

                    </p>
                </div>

                <?php if(auth()->check() && auth()->user()->role === 'admin'): ?>
                    <form action="<?php echo e(route('restaurant.destroy', $restaurant->id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus restoran ini?')" style="margin-top: 10px;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" style="
                            background: #ffcbd1;
                            color: #dc3545;
                            border: none;
                            padding: 6px 14px;
                            border-radius: 8px;
                            font-size: 12px;
                            font-weight: bold;
                            cursor: pointer;
                            transition: 0.2s;
                            width: 100%;
                        " onmouseover="this.style.background='#dc3545'; this.style.color='white';" onmouseout="this.style.background='#ffcbd1'; this.style.color='#dc3545';">
                            Hapus Restoran
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <div style="
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
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
</style><?php /**PATH C:\xampp new\htdocs\tugas2-kelompok\resources\views/restoran.blade.php ENDPATH**/ ?>