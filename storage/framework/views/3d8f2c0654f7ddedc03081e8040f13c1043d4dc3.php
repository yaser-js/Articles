<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Login'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="main-content">

    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white"><?php echo app('translator')->get('Welcome'); ?></h1>
                        <p class="text-lead text-white">
                            <?php echo app('translator')->get("Use these awesome forms to login or create new account."); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--9 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary border border-soft">


                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Sign in with credentials</small>
                        </div>

                        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p>
                                <i class="fas fa-exclamation-triangle"></i> <?php echo app('translator')->get('Please fix the following errors & try again!'); ?>
                            </p>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>

                        <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <!-- redirectTo URL -->
                            <input type="hidden" name="redirectTo" value="<?php echo e(request()->redirectTo); ?>">

                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('E-Mail Address')); ?>" aria-label="email" aria-describedby="input-email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo app('translator')->get('Password'); ?>" aria-label="<?php echo app('translator')->get('Password'); ?>" aria-describedby="input-password" required>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" name="remember" id="remember" type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <label class="custom-control-label" for="remember">
                                            <span class="text-muted">
                                                Remember my login
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-2">
                                    <?php echo app('translator')->get('Submit'); ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">

                    <?php if(Route::has('register')): ?>
                    <div class="col-6 text-right">
                        <a href="<?php echo e(route('register')); ?>" class="text-gray">
                            <small>Create new account</small>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\Articles-master\resources\views/auth/login.blade.php ENDPATH**/ ?>