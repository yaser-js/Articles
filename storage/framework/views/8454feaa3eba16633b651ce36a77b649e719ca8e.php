<footer class="py-5 bg-white" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; <?php echo e(config('app.name')); ?>

                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('login')); ?>" class="nav-link">Login</a>
                    </li>
                    <?php if(Route::has('register')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('register')); ?>" class="nav-link">Register</a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/auth/footer.blade.php ENDPATH**/ ?>