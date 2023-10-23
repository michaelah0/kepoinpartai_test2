<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="partai-item">
                <img src="<?php echo e(asset('images/image_1.png')); ?>" alt="Partai 1" style="max-width: 100%; height: auto;">
                <button class="btn btn-primary mt-3">Lihat Profil</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="partai-item">
                <img src="<?php echo e(asset('images/image_2.png')); ?>" alt="Partai 2" style="max-width: 100%; height: auto;">
                <button class="btn btn-primary mt-3">Lihat Profil</button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="partai-item">
                <div class="image-container">
                    <img src="<?php echo e(asset('images/image_3.png')); ?>" alt="Partai 3" class="img-fluid">
                </div>
                <a href="<?php echo e(route('partai.pdip')); ?>" class="btn btn-primary mt-3">Lihat Profil</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="partai-item">
                <img src="<?php echo e(asset('images/image_4.png')); ?>" alt="Partai 4" style="max-width: 100%; height: auto;">
                <button class="btn btn-primary mt-3">Lihat Profil</button>
            </div>
        </div>
        
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Mike doc\Uni\Sem5\Database sem 5\KepoinPartai\Kepoin_partai\kepoinpartai\resources\views/partai_all.blade.php ENDPATH**/ ?>