<?php $__env->startPush('after-styles'); ?>
<!-- Select2 Bootstrap 4 Core UI -->
<link href="<?php echo e(asset('vendor/select2/select2-coreui-bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
<!-- Select2 Bootstrap 4 Core UI -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.select2').select2({
        theme: "bootstrap",
        placeholder: "-- Select an option --",
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/components/library/select2.blade.php ENDPATH**/ ?>