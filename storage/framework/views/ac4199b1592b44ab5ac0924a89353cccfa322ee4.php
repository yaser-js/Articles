<?php $__env->startSection('title'); ?> <?php echo e(__("Posts")); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">
                    The Super Articles
                </h1>
                <p class="lead">
                    We publish articles on a number of topics. We encourage you to read our posts and let us know your feedback. It would be really help us to move forward.
                </p>

                <?php echo $__env->make('frontend.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>

<?php if(count($$module_name)): ?>
<section class="section section-lg line-bottom-light">
    <div class="container mt-n7 mt-lg-n12 z-2">
        <div class="row">
            <?php
            $$module_name_singular = $$module_name->shift();

            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            ?>

            <div class="col-lg-12 mb-5">
                <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                    <a href="<?php echo e($details_url); ?>" class="col-md-6 col-lg-6">
                        <img src="<?php echo e($$module_name_singular->featured_image); ?>" alt="" class="card-img-top">
                    </a>
                    <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-lg-5">
                        <a href="<?php echo e($details_url); ?>">
                            <h2><?php echo e($$module_name_singular->name); ?></h2>
                        </a>
                        <p>
                            <?php echo e($$module_name_singular->intro); ?>

                        </p>
                        <div class="d-flex align-items-center">
                            <img class="avatar avatar-sm rounded-circle" src="<?php echo e(asset('img/avatars/'.rand(1, 8).'.jpg')); ?>" alt="">

                            <?php echo isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href=""><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'; ?>


                            <h6 class="text-muted small font-weight-normal mb-0 ml-auto"><time datetime="<?php echo e($$module_name_singular->published_at); ?>"><?php echo e($$module_name_singular->published_at_formatted); ?></time></h6>
                        </div>
                    </div>
                </div>
            </div>

            <?php $__currentLoopData = $$module_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $$module_name_singular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded">
                    <a href="<?php echo e($details_url); ?>"><img src="<?php echo e($$module_name_singular->featured_image); ?>" class="card-img-top" alt=""></a>
                    <div class="card-body p-0 pt-4">
                        <a href="<?php echo e($details_url); ?>" class="h3"><?php echo e($$module_name_singular->name); ?></a>
                        <div class="d-flex align-items-center my-4">
                            <img class="avatar avatar-sm rounded-circle" src="<?php echo e(asset('img/avatars/'.rand(1, 8).'.jpg')); ?>" alt="">
                            <?php echo isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href=""><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'; ?>

                        </div>
                        <p class="mb-3"><?php echo e($$module_name_singular->intro); ?></p>
                        <a href="<?php echo e(route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])); ?>" class="badge badge-primary"><?php echo e($$module_name_singular->category_name); ?></a>
                        <p>
                            <?php $__currentLoopData = $$module_name_singular->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('frontend.tags.show', [encode_id($tag->id), $tag->slug])); ?>" class="badge badge-warning"><?php echo e($tag->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\Modules/Article\Resources/views/frontend/posts/index.blade.php ENDPATH**/ ?>