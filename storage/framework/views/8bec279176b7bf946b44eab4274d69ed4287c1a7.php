<p>
    <?php echo app('translator')->get("Displaing all the values of :module_name (Id: :id)", ['module_name'=>ucwords($module_name_singular), 'id'=>$$module_name_singular->id]); ?>.
</p>
<table class="table table-responsive-sm table-hover table-bordered">
    <?php
    $all_columns = $$module_name_singular->getTableColumns();
    ?>
    <thead>
        <tr>
            <th scope="col">
                <strong>
                    <?php echo app('translator')->get('Name'); ?>
                </strong>
            </th>
            <th scope="col">
                <strong>
                    <?php echo app('translator')->get('Value'); ?>
                </strong>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $all_columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <strong>
                    <?php echo e(label_case($column->Field)); ?>

                </strong>
            </td>
            <td>
                <?php echo show_column_value($$module_name_singular, $column); ?>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.library.lightbox','data' => []]); ?>
<?php $component->withName('library.lightbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/backend/includes/show.blade.php ENDPATH**/ ?>