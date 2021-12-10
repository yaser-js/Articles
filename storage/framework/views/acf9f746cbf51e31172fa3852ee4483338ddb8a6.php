<?php $__env->startSection('title'); ?> <?php echo e(__("Categories")); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">
                    Categories
                </h1>
                <p class="lead">
                    All the article categories.
                </p>

                <?php echo $__env->make('frontend.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>

<section class="section section-lg line-bottom-light">
    <div class="container mt-n7 mt-lg-n12 z-2">
        <div class="row">
            <?php $__currentLoopData = $$module_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $$module_name_singular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded">
                    <div class="card-body p-0 pt-4">
                        <a href="<?php echo e($details_url); ?>" class="h3">
                            <?php echo e($$module_name_singular->name); ?>

                        </a>

                        <p class="mb-3">
                            <?php echo e($$module_name_singular->description); ?>

                        </p>
                        <p class="mb-3 font-weight-bold">
                            Total <?php echo e($$module_name_singular->posts->count()); ?> posts.
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="d-flex justify-content-center w-100 mt-3">
            <?php echo e($$module_name->links()); ?>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\Articles-master\Modules/Article\Resources/views/frontend/categories/index.blade.php ENDPATH**/ ?>