<?php $__env->startSection('title'); ?> <?php echo e(__($module_action)); ?> <?php echo e($module_title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend-breadcrumbs','data' => []]); ?>
<?php $component->withName('backend-breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend-breadcrumb-item','data' => ['type' => 'active','icon' => ''.e($module_icon).'']]); ?>
<?php $component->withName('backend-breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'active','icon' => ''.e($module_icon).'']); ?><?php echo e($module_title); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h4 class="card-title mb-0">
                    <i class="<?php echo e($module_icon); ?>"></i> <?php echo e($module_title); ?> <small class="text-muted">Data Table <?php echo e(__($module_action)); ?></small>
                </h4>
                <div class="small text-muted">
                    <?php echo e(__('labels.backend.roles.index.sub-title')); ?>

                </div>
            </div>

            <div class="col-4">
                <div class="float-right">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.create','data' => ['route' => ''.e(route("backend.$module_name.create")).'','title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'']]); ?>
<?php $component->withName('buttons.create'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.e(route("backend.$module_name.create")).'','title' => ''.e(__('Create')).' '.e(ucwords(Str::singular($module_name))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <div class="row mt-4">
            <div class="col">
                <table class="table table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th><?php echo e(__("labels.backend.$module_name.fields.name")); ?></th>
                            <th><?php echo e(__("labels.backend.$module_name.fields.permissions")); ?></th>
                            <th class="text-right"><?php echo e(__("labels.backend.action")); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $$module_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_name_singular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <strong>
                                    <?php echo e($module_name_singular->name); ?>

                                </strong>
                            </td>
                            <td>
                                <?php $__currentLoopData = $module_name_singular->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($permission->name); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td class="text-right">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_'.$module_name)): ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.edit','data' => ['route' => ''.route("backend.$module_name.edit", $module_name_singular).'','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']]); ?>
<?php $component->withName('buttons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.route("backend.$module_name.edit", $module_name_singular).'','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.show','data' => ['route' => ''.route("backend.$module_name.show", $module_name_singular).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']]); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.route("backend.$module_name.show", $module_name_singular).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    <?php echo $$module_name->total(); ?> <?php echo e(__('labels.backend.total')); ?>

                </div>
            </div>
            <div class="col-5">
                <div class="float-right">
                    <?php echo $$module_name->render(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/backend/roles/index.blade.php ENDPATH**/ ?>