<!doctype html>
<html dir="" lang="<?php echo e(App::getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/favicon.png')); ?>">
    <meta name="keyword" content="<?php echo e(setting('meta_keyword')); ?>">
    <meta name="description" content="<?php echo e(setting('meta_description')); ?>">

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.png')); ?>">
    <link rel="icon" type="image/ico" href="<?php echo e(asset('img/favicon.png')); ?>" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title>

    <?php echo $__env->yieldPushContent('before-styles'); ?>

    <link rel="stylesheet" href="<?php echo e(mix('css/backend.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+Bengali+UI&display=swap" rel="stylesheet" />
    <style>body{font-family:Ubuntu,"Noto Sans Bengali UI", Arial, Helvetica, sans-serif}</style>

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

    <?php echo \Livewire\Livewire::styles(); ?>


</head>
<body class="c-app">

    <!-- Sidebar -->
    <?php echo $__env->make('backend.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /Sidebar -->

    <div class="c-wrapper">

        <!-- Header Block -->
        <?php echo $__env->make('backend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- / Header Block -->

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">

                    <div class="animated fadeIn">

                        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <!-- Errors block -->
                        <?php echo $__env->make('backend.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- / Errors block -->

                        <!-- Main content block -->
                        <?php echo $__env->yieldContent('content'); ?>
                        <!-- / Main content block -->

                    </div>
                </div>
            </main>
        </div>

        <!-- Footer block -->
        <?php echo $__env->make('backend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- / Footer block -->

        <!-- Scripts -->
        <?php echo $__env->yieldPushContent('before-scripts'); ?>

        <script src="<?php echo e(mix('js/backend.js')); ?>"></script>

        <?php echo \Livewire\Livewire::scripts(); ?>


        <?php echo $__env->yieldPushContent('after-scripts'); ?>
        <!-- / Scripts -->

    </body>
    </html>
<?php /**PATH E:\xamp\htdocs\laravel\Articles-master\resources\views/backend/layouts/app.blade.php ENDPATH**/ ?>