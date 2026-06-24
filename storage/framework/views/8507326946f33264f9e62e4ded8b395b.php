<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard Admin')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-2 text-indigo-600">Menejemen Menu</h3>
                    <p class="text-sm text-gray-600 mb-6">Silakan pilih aksi di bawah untuk mengelola data katalog kuliner kelompok.</p>

                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <a href="<?php echo e(route('restaurant.create')); ?>" style="background-color: #4F46E5; color: white; font-weight: bold; padding: 10px 20px; border-radius: 8px; text-decoration: none; transition: 0.3s;" onmouseover="this.style.backgroundColor='#4338CA'" onmouseout="this.style.backgroundColor='#4F46E5'">
                            ➕ Tambah Menu Baru
                        </a>
                        
                        <a href="<?php echo e(url('/restoran')); ?>" style="background-color: #4B5563; color: white; font-weight: bold; padding: 10px 20px; border-radius: 8px; text-decoration: none; transition: 0.3s;" onmouseover="this.style.backgroundColor='#374151'" onmouseout="this.style.backgroundColor='#4B5563'">
                            👁️ Lihat Katalog Web
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp new\htdocs\tugas2-kelompok\resources\views/dashboard.blade.php ENDPATH**/ ?>