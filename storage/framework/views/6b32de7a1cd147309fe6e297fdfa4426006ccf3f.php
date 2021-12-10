<?php $attributes = $attributes->exceptProps(["small"=>""]); ?>
<?php foreach (array_filter((["small"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<button onclick="window.history.back();" class="btn btn-warning ml-1 <?php echo e(($small=='true')? 'btn-sm' : ''); ?>" data-toggle="tooltip" title="<?php echo e(__('Cancel')); ?>"><i class="fas fa-reply"></i><?php echo e($slot); ?></button><?php /**PATH E:\xamp\htdocs\laravel\Articles-master\resources\views/components/buttons/cancel.blade.php ENDPATH**/ ?>