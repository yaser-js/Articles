<?php $attributes = $attributes->exceptProps(["route"=>"", "icon"=>"fas fa-plus-circle", "title", "small"=>"", "class"=>""]); ?>
<?php foreach (array_filter((["route"=>"", "icon"=>"fas fa-plus-circle", "title", "small"=>"", "class"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($route): ?>
<a href='<?php echo e($route); ?>'
    class='btn btn-success <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-toggle="tooltip"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</a>
<?php else: ?>
<button type="submit"
    class='btn btn-success <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-toggle="tooltip"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</button>
<?php endif; ?>
<?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/components/buttons/create.blade.php ENDPATH**/ ?>