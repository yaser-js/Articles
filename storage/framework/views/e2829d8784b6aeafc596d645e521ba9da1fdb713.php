<footer class="c-footer text-muted">
    <div>
        <a href="/"><?php echo e(app_name()); ?></a>
        <?php if(setting('show_copyright')): ?>
        <?php echo app('translator')->get('Copyright'); ?> &copy; <?php echo e(date('Y')); ?>

        <?php endif; ?>
    </div>
</footer>
<?php /**PATH E:\xamp\htdocs\laravel\Articles-master\resources\views/backend/includes/footer.blade.php ENDPATH**/ ?>