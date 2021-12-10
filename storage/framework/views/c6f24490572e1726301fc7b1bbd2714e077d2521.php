<?php $__env->startSection('title'); ?> <?php echo app('translator')->get("Dashboard"); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend-breadcrumbs','data' => []]); ?>
<?php $component->withName('backend-breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
            <div class="col-sm-8">
                <h4 class="card-title mb-0"><?php echo app('translator')->get("Welcome to", ['name'=>config('app.name')]); ?></h4>
                <div class="small text-muted"><?php echo e(date_today()); ?></div>
            </div>

            <div class="col-sm-4 hidden-sm-down">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <button type="button" class="btn btn-info float-right">
                        <i class="c-icon cil-bullhorn"></i>
                    </button>
                </div>
            </div>
        </div>
        <hr>

        <!-- Dashboard Content Area -->

        <!-- / Dashboard Content Area -->

    </div>
</div>
<!-- / card -->
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-value-lg">89.9%</div>
                <div>Widget title</div>
                <div class="progress progress-xs my-2">
                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-value-lg">12.124</div>
                <div>Widget title</div>
                <div class="progress progress-xs my-2">
                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-value-lg">$98.111,00</div>
                <div>Widget title</div>
                <div class="progress progress-xs my-2">
                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-value-lg">2 TB</div>
                <div>Widget title</div>
                <div class="progress progress-xs my-2">
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-gradient-primary">
            <div class="card-body">
                <div class="text-value-lg">89.9%</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-xs my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-gradient-warning">
            <div class="card-body">
                <div class="text-value-lg">12.124</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-xs my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-gradient-danger">
            <div class="card-body">
                <div class="text-value-lg">$98.111,00</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-xs my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-gradient-info">
            <div class="card-body">
                <div class="text-value-lg">2 TB</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-xs my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-muted">Widget helper text</small>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/backend/index.blade.php ENDPATH**/ ?>