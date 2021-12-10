<?php if($errors->any()): ?>
<div class="alert alert-danger" role="alert">
    <p>
        <i class="fa fa-exclamation-triangle"></i> Please fix the following errors and submit again!
    </p>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(session('status')): ?>
<p class="alert alert-success"><?php echo e(session('status')); ?></p>
<?php endif; ?>
<?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/frontend/includes/messages.blade.php ENDPATH**/ ?>