<?php $__env->startSection('title'); ?> <?php echo e(__($module_action)); ?> <?php echo e($module_title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend-breadcrumbs','data' => []]); ?>
<?php $component->withName('backend-breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend-breadcrumb-item','data' => ['route' => ''.e(route("backend.$module_name.index")).'','icon' => ''.e($module_icon).'']]); ?>
<?php $component->withName('backend-breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.e(route("backend.$module_name.index")).'','icon' => ''.e($module_icon).'']); ?>
        <?php echo e($module_title); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend-breadcrumb-item','data' => ['type' => 'active']]); ?>
<?php $component->withName('backend-breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'active']); ?><?php echo e(__($module_action)); ?> <?php echo $__env->renderComponent(); ?>
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
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="<?php echo e($module_icon); ?>"></i>  <?php echo e($module_title); ?> <small class="text-muted"><?php echo e(__($module_action)); ?></small>
                </h4>
                <div class="small text-muted">
                    <?php echo app('translator')->get(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)]); ?>
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="<?php echo e(route("backend.$module_name.show", $$module_name_singular->id)); ?>" class="btn btn-primary btn-sm ml-1" data-toggle="tooltip" title="Show Details"><i class="fas fa-tv"></i> Show</a>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">
                <?php echo e(html()->modelForm($$module_name_singular, 'PATCH', route("backend.$module_name.update", $$module_name_singular))->class('form')->open()); ?>


                <?php echo $__env->make("article::backend.$module_name.form", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <?php echo e(html()->submit($text = icon('fas fa-save')." Save")->class('btn btn-success')); ?>

                        </div>
                    </div>

                    <div class="col-8">
                        <div class="float-right">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_'.$module_name)): ?>
                            <a href="<?php echo e(route("backend.$module_name.destroy", $$module_name_singular)); ?>" class="btn btn-danger" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.delete')); ?>"><i class="fas fa-trash-alt"></i></a>
                            <?php endif; ?>
                            <a href="<?php echo e(route("backend.$module_name.index")); ?>" class="btn btn-warning" data-toggle="tooltip" title="<?php echo e(__('labels.backend.cancel')); ?>"><i class="fas fa-reply"></i> Cancel</a>
                        </div>
                    </div>
                </div>

                <?php echo e(html()->form()->close()); ?>


            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    Updated: <?php echo e($$module_name_singular->updated_at->diffForHumans()); ?>,
                    Created at: <?php echo e($$module_name_singular->created_at->isoFormat('LLLL')); ?>

                </small>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/modules/article/backend/posts/edit.blade.php ENDPATH**/ ?>