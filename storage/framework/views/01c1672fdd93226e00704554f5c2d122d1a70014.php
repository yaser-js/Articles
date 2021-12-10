<?php $__env->startSection('title'); ?> <?php echo e($$module_name_singular->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <div class="mb-2">
                    <a href="<?php echo e(route('frontend.tags.index')); ?>" class="badge badge-sm badge-warning text-uppercase px-3">
                        <?php echo e(__("Tags")); ?>

                    </a>
                </div>
                <h1 class="display-2 mb-4">
                    <?php echo e($$module_name_singular->name); ?>

                </h1>
                <p class="lead">
                    <?php echo e($$module_name_singular->description); ?>

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

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $details_url = route("frontend.posts.show",[encode_id($post->id), $post->slug]);
            ?>

            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded">
                    <a href="<?php echo e($details_url); ?>"><img src="<?php echo e($post->featured_image); ?>" class="card-img-top" alt=""></a>
                    <div class="card-body p-0 pt-4">
                        <a href="<?php echo e($details_url); ?>" class="h3"><?php echo e($post->name); ?></a>
                        <div class="d-flex align-items-center my-4">
                            <img class="avatar avatar-sm rounded-circle" src="<?php echo e(asset('img/avatars/'.rand(1, 8).'.jpg')); ?>" alt="">
                            <?php echo isset($post->created_by_alias)? $post->created_by_alias : '<a href=""><h6 class="text-muted small ml-2 mb-0">'.$post->created_by_name.'</h6></a>'; ?>

                        </div>
                        <p class="mb-3"><?php echo e($post->intro); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="d-flex justify-content-center w-100 mt-3">
            <?php echo e($posts->links()); ?>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\Modules/Tag\Resources/views/frontend/tags/show.blade.php ENDPATH**/ ?>