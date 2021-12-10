<?php $__env->startSection('title'); ?> <?php echo e($module_action); ?> <?php echo e($module_title); ?> <?php $__env->stopSection(); ?>

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
<?php $component->withAttributes(['type' => 'active']); ?><?php echo e($module_action); ?> <?php echo $__env->renderComponent(); ?>
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
                    <i class="<?php echo e($module_icon); ?>"></i> <?php echo e($module_title); ?> <small class="text-muted"><?php echo e($module_action); ?></small>
                </h4>
                <div class="small text-muted">
                    <?php echo e(ucwords($module_name)); ?> Management Dashboard
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="float-right">
                    <a href="<?php echo e(route("backend.$module_name.index")); ?>" class="btn btn-secondary mt-1 btn-sm" data-toggle="tooltip" title="<?php echo e(ucwords($module_name)); ?> List"><i class="fas fa-list"></i> List</a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_'.$module_name)): ?>
                    <a href="<?php echo e(route("backend.$module_name.edit", $$module_name_singular)); ?>" class="btn btn-primary mt-1 btn-sm" data-toggle="tooltip" title="Edit <?php echo e(Str::singular($module_name)); ?> "><i class="fas fa-wrench"></i> Edit</a>
                    <?php endif; ?>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col-12 col-sm-5">

                <?php echo $__env->make('backend.includes.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <div class="col-12 col-sm-7">

                <div class="text-center">
                    <a href="<?php echo e(route("frontend.$module_name.show", [encode_id($$module_name_singular->id), $$module_name_singular->slug])); ?>" class="btn btn-success" target="_blank"><i class="fas fa-link"></i> Public View</a>
                </div>
                <hr>

                <div class="card">
                    <div class="card-header">
                        Posts
                    </div>

                    <div class="card-body">
                        <ul class="fa-ul">
                            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php
                            switch ($row->status) {
                                case 0:
                                    // Unpublished
                                    $text_class = 'text-danger';
                                    break;

                                case 1:
                                    // Published
                                    $text_class = 'text-success';
                                    break;

                                case 2:
                                    // Draft
                                    $text_class = 'text-warning';
                                    break;

                                default:
                                    // Default
                                    $text_class = 'text-primary';
                                    break;
                            }
                            ?>
                            <li>
                                <span class="fa-li"><i class="fas fa-check-square <?php echo e($text_class); ?>"></i></span> <a href="<?php echo e(route('backend.posts.show', $row->id)); ?>"><?php echo e($row->name); ?></a> <a href="<?php echo e(route('frontend.posts.show', [encode_id($row->id), $row->slug])); ?>" class="btn btn-sm btn-outline-primary" target="_blank" data-toggle="tooltip" title="Public View" > <i class="fas fa-external-link-square-alt"></i> </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-center">
                                No post found.
                            </p>
                            <?php endif; ?>
                        </ul>
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\Modules/Tag\Resources/views/backend/tags/show.blade.php ENDPATH**/ ?>