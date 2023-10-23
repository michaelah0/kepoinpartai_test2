<?php $__env->startSection('content'); ?>
<div class="container text-center">
    <h3>Feedback Form</h3>
    <form method="post" action="<?php echo e(route('store.feedback')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="Anonymous">
        </div>
        <div class="form-group">
            <label for="feedbacks">Feedback</label>
            <textarea name="feedbacks" id="feedbacks" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Feedback</button>
    </form>
</div>

<?php if(session('success')): ?>
<script>
    // Check if a success message is present
    alert("<?php echo e(session('success')); ?>"); // Display an alert
    document.getElementById('feedback').value = ''; // Clear the feedback text box
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Mike doc\Uni\Sem5\Database sem 5\KepoinPartai\Kepoin_partai\kepoinpartai\resources\views/feedback.blade.php ENDPATH**/ ?>