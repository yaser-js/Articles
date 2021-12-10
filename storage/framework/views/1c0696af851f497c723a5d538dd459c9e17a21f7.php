<div dir="" class="c-sidebar c-sidebar-dark c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand"> <a href="<?php echo e(route("backend.dashboard")); ?>"><img class="c-sidebar-brand-full" src="<?php echo e(asset("img/backend-logo.jpg")); ?>" height="40" alt="<?php echo e(app_name()); ?>"><img class="c-sidebar-brand-minimized" src="<?php echo e(asset("img/backend-logo-square.jpg")); ?>" height="40" alt="<?php echo e(app_name()); ?>"></a> </div>

    <?php echo $admin_sidebar->asUl( ['class' => 'c-sidebar-nav'], ['class' => 'c-sidebar-nav-dropdown-items'] ); ?>


    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
<?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/backend/includes/sidebar.blade.php ENDPATH**/ ?>