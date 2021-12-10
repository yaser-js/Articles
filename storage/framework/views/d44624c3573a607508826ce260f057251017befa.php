<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/favicon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo e(setting('meta_description')); ?>">
    <meta name="keyword" content="<?php echo e(setting('meta_keyword')); ?>">

    <?php echo $__env->make('frontend.includes.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>">
    <link rel="icon" type="image/ico" href="<?php echo e(asset('img/favicon.png')); ?>" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo $__env->yieldPushContent('before-styles'); ?>

    <link rel="stylesheet" href="<?php echo e(mix('css/frontend.css')); ?>">

    <?php echo $__env->yieldPushContent('after-styles'); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.google-analytics','data' => []]); ?>
<?php $component->withName('google-analytics'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</head>

<body>

    <?php echo $__env->make('frontend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.preloader','data' => []]); ?>
<?php $component->withName('preloader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('frontend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

<!-- Scripts -->
<?php echo $__env->yieldPushContent('before-scripts'); ?>

<script src="<?php echo e(mix('js/frontend.js')); ?>"></script>

<?php echo $__env->yieldPushContent('after-scripts'); ?>

</html><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>