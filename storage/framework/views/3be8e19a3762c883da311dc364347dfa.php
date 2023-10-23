<?php $__env->startSection('content'); ?>
<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <img src="<?php echo e(asset('images/image_3.png')); ?>" alt="PDIP" style="max-width: 50%; max-height: 50%;">
    <h1>Profile Partai</h1>
<?php if(isset($profile_pdip)): ?>
    <p>Nama Partai: <?php echo e($nama_partai); ?></p>
<?php else: ?>
    <p>Data not found</p>
<?php endif; ?>
    <p class="mt-3">Informasi yang ditampilkan tidak tepat? Yuk kirim feedbackmu!</p>
    <a href="<?php echo e(route('feedback')); ?>" class="btn btn-primary mt-3">Feedback</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Mike doc\Uni\Sem5\Database sem 5\KepoinPartai\Kepoin_partai\kepoinpartai\resources\views/partai/pdip.blade.php ENDPATH**/ ?>