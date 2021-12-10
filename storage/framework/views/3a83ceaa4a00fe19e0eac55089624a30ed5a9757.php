<?php $__env->startSection('title'); ?> <?php echo e($$module_name_singular->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<article>
    <section class="section-header bg-primary text-white pb-7 pb-lg-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-3 mb-4 px-lg-5">
                        <?php echo e($$module_name_singular->name); ?>

                    </h1>
                    <div class="post-meta">
                        <span class="font-weight-bold mr-3">
                            <?php echo e(isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name); ?>

                        </span>
                        <span class="post-date mr-3">
                            <?php echo e($$module_name_singular->published_at_formatted); ?>

                        </span>
                        <span class="font-weight-bold">
                            7 min read
                        </span>
                    </div>

                    <?php echo $__env->make('frontend.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <div class="pattern bottom"></div>
    </section>

    <?php
    $post_details_url = route('frontend.posts.show',[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
    ?>
    <div class="section section-sm bg-white pt-5 text-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <img class="img-fluid" src="<?php echo e($$module_name_singular->featured_image); ?>" alt="<?php echo e($$module_name_singular->name); ?>">

                    <p>
                        <?php echo $$module_name_singular->content; ?>

                    </p>
                    <p>
                        <span class="font-weight-bold">
                            Category:
                        </span>

                        <a href="<?php echo e(route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])); ?>" class="badge badge-sm badge-warning text-uppercase px-3"><?php echo e($$module_name_singular->category_name); ?></a>
                    </p>

                    <p>
                        <?php $__currentLoopData = $$module_name_singular->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('frontend.tags.show', [encode_id($tag->id), $tag->slug])); ?>" class="badge badge-sm badge-info text-uppercase px-3"><?php echo e($tag->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-sm-center align-items-center py-3 mt-3">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-9 col-md-6">
                        <h6 class="font-weight-bolder d-inline mb-0 mr-3">Share:</h6>

                        <?php $title_text = $$module_name_singular->name; ?>

                        <button class="btn btn-sm mr-3 btn-icon-only btn-pill btn-twitter d-inline" data-sharer="twitter" data-via="LaravelStarter" data-title="<?php echo e($title_text); ?>" data-hashtags="LaravelStarter" data-url="<?php echo e(url()->full()); ?>" data-toggle="tooltip" title="Share on Twitter" data-original-title="Share on Twitter">
                            <span class="btn-inner-icon"><i class="fab fa-twitter"></i></span>
                        </button>

                        <button class="btn btn-sm mr-3 btn-icon-only btn-pill btn-facebook d-inline" data-sharer="facebook" data-hashtag="LaravelStarter" data-url="<?php echo e(url()->full()); ?>" data-toggle="tooltip" title="Share on Facebook" data-original-title="Share on Facebook">
                            <span class="btn-inner-icon"><i class="fab fa-facebook-f"></i></span>
                        </button>
                    </div>

                    <div class="col-3 col-md-6 text-right"><i class="far fa-bookmark text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark story"></i></div>
                </div>
            </div>
        </div>
    </div>
</article>

<?php $__env->stopSection(); ?>

<?php $__env->startPush("after-scripts"); ?>
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\Modules/Article\Resources/views/frontend/posts/show.blade.php ENDPATH**/ ?>