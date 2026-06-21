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
            Dashboard Restoran
        </h2>

        <div style="display: flex; align-items: center; gap: 12px;">
            <a href="<?php echo e(route('restaurant.create')); ?>" 
               style="
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
                    color: #ffffff;
                    padding: 10px 20px;
                    border-radius: 12px;
                    font-size: 14px;
                    font-weight: 700;
                    text-decoration: none;
                    box-shadow: 0 4px 14px rgba(37, 99, 235, 0.25);
                    transition: all 0.2s ease;
               "
               onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 18px rgba(37, 99, 235, 0.35)';"
               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 14px rgba(37, 99, 235, 0.25)';">
                <span>➕</span> Tambah Restoran
            </a>

            <form action="<?php echo e(route('logout')); ?>" method="POST" style="margin: 0;">
                <?php echo csrf_field(); ?>
                <button type="submit" 
                    style="
                        display: inline-flex;
                        align-items: center;
                        gap: 8px;
                        background: #ffffff;
                        color: #be185d;
                        border: 2px solid rgba(219, 39, 119, 0.2);
                        padding: 10px 20px;
                        border-radius: 12px;
                        font-size: 14px;
                        font-weight: 700;
                        cursor: pointer;
                        box-shadow: 0 4px 12px rgba(219, 39, 119, 0.05);
                        transition: all 0.2s ease;
                    "
                    onmouseover="this.style.background='#be185d'; this.style.color='#ffffff'; this.style.transform='translateY(-2px)';"
                    onmouseout="this.style.background='#ffffff'; this.style.color='#be185d'; this.style.transform='translateY(0)';"
                    onsubmit="return confirm('Apakah Anda yakin ingin keluar?')">
                    <span>🚪</span> Logout
                </button>
            </form>
        </div>
    </div>

    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        max-width: 1200px;
        margin: 0 auto;
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
        ">
            <div style="
                position: absolute;
                top: 0; left: 0; width: 100%; height: 100%;
                background: linear-gradient(to bottom, transparent 40%, rgba(0, 0, 0, 0.4));
                z-index: 1;
            "></div>
            
            <img src="<?php echo e(asset($restaurant->image)); ?>"
                 alt="<?php echo e($restaurant->name); ?>"
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
                        ⭐ <?php echo e(number_format($restaurant->rating, 1)); ?>

                    </span>
                    
                    <span style="
                        color: #1d4ed8;
                        font-size: 18px;
                        font-weight: 700;
                    ">
                        Rp<?php echo e(number_format($restaurant->price, 0, ',', '.')); ?>

                    </span>
                </div>

                <p style="
                    font-size: 13.5px;
                    color: #475569;
                    margin: 0 0 20px 0;
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

            <div style="
                display: flex;
                gap: 12px;
                margin-top: auto;
            ">
                <a href="<?php echo e(route('restaurant.edit', $restaurant->id)); ?>"
                   style="
                    flex: 1;
                    text-align: center;
                    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
                    color: #1d4ed8;
                    padding: 12px;
                    border-radius: 14px;
                    text-decoration: none;
                    font-size: 14px;
                    font-weight: 700;
                    border: 1px solid rgba(29, 78, 216, 0.2);
                    transition: all 0.2s;
                   "
                   onmouseover="this.style.transform='scale(1.02)'; this.style.background='#bfdbfe'"
                   onmouseout="this.style.transform='scale(1)'; this.style.background='linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%)'">
                    Edit
                </a>

                <form action="<?php echo e(route('restaurant.destroy', $restaurant->id)); ?>"
                      method="POST"
                      style="flex: 1; margin: 0;"
                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus restoran ini?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button style="
                        width: 100%;
                        background: linear-gradient(135deg, #db2777 0%, #be185d 100%);
                        color: white;
                        border: none;
                        padding: 12px;
                        border-radius: 14px;
                        font-size: 14px;
                        font-weight: 700;
                        cursor: pointer;
                        box-shadow: 0 4px 14px rgba(219, 39, 119, 0.3);
                        transition: all 0.2s;
                    "
                    onmouseover="this.style.transform='scale(1.02)'; this.style.boxShadow='0 6px 18px rgba(219, 39, 119, 0.4)'"
                    onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 14px rgba(219, 39, 119, 0.3)'">
                        Hapus
                    </button>
                </form>
            </div>

        </div>

    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
</style><?php /**PATH C:\Users\dell\tugas2-kelompok\resources\views/dashboard.blade.php ENDPATH**/ ?>