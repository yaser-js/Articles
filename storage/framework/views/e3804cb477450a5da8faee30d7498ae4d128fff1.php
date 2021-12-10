<?php $__env->startSection('title'); ?> <?php echo e(app_name()); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section-header pb-6 pb-lg-10 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-1 mb-4"><?php echo e(app_name()); ?></h1>
                <p class="lead text-muted">
                    <?php echo setting('meta_description'); ?>

                </p>

                <?php echo $__env->make('frontend.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>

<section class="section section-ld">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 mb-lg-5">Home Page</h2>
            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\Articles-master\resources\views/frontend/index.blade.php ENDPATH**/ ?>