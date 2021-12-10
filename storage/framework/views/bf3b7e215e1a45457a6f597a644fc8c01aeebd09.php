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

    <link rel="stylesheet" href="<?php echo e(mix('css/dashboard.css')); ?>">

    <?php echo $__env->yieldPushContent('after-styles'); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.google-analytics','data' => ['config' => ''.e(setting('google_analytics')).'']]); ?>
<?php $component->withName('google-analytics'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['config' => ''.e(setting('google_analytics')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</head>

<body class="bg-white">

    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?php echo e(asset('img/logo-with-text.jpg')); ?>" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="/">
                                <img src="<?php echo e(asset('img/logo-with-text-dark.png')); ?>" height="40">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <?php if(auth()->guard()->guest()): ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?php echo e(route('login')); ?>" class="nav-link">
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                    <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('register')); ?>" class="nav-link">
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>

                <hr class="d-lg-none" />
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
                            <i class="fab fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
                            <i class="fab fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
                            <i class="fab fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
                            <i class="fab fa-github"></i>
                            <span class="nav-link-inner--text d-lg-none">Github</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <a href="#" target="_blank" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                                <i class="fas fa-paper-plane mr-2"></i>
                            </span>
                            <span class="nav-link-inner--text">Upgrade to Pro</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('auth.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('before-scripts'); ?>

    <script src="<?php echo e(mix('js/dashboard.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('after-scripts'); ?>

</body>

</html>
<?php /**PATH E:\xamp\htdocs\laravel\Articles-master\resources\views/auth/layout.blade.php ENDPATH**/ ?>