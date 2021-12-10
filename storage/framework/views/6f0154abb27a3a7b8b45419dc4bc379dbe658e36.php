<?php
$module_icon = "c-icon cil-list-rich";
?>

<?php $__env->startSection('title'); ?> <?php echo e(__('Log Viewer Dashboard')); ?> <?php $__env->stopSection(); ?>

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
<?php $component->withAttributes(['type' => 'active','icon' => ''.e($module_icon).'']); ?>
        <?php echo app('translator')->get('Log Viewer'); ?>
     <?php echo $__env->renderComponent(); ?>
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
                    <i class="<?php echo e($module_icon); ?>"></i> <?php echo app('translator')->get('Log Viewer'); ?>
                    <small class="text-muted"><?php echo app('translator')->get('Dashboard'); ?> </small>
                </h4>
                <div class="small text-muted">
                    <?php echo app('translator')->get('Log Viewer Module'); ?>
                </div>
            </div>

            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.return-back','data' => []]); ?>
<?php $component->withName('buttons.return-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
            <div class="col-md-6 col-lg-3">
                <canvas id="stats-doughnut-chart" height="300" class="mb-3"></canvas>

                <hr>
                <a class="btn btn-primary btn-lg btn-block" href="<?php echo e(route('log-viewer::logs.list')); ?>" type="button">
                    <i class="fas fa-list-ol"></i> <?php echo app('translator')->get('Logs by Date'); ?>
                </a>
            </div>

            <div class="col-md-6 col-lg-9">
                <div class="row">
                    <?php $__currentLoopData = $percents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-12 col-lg-4 mb-3">
                            <div class="box level-<?php echo e($level); ?> <?php echo e($item['count'] === 0 ? 'empty' : ''); ?>">
                                <div class="box-icon">
                                    <?php echo log_styler()->icon($level); ?>

                                </div>

                                <div class="box-content">
                                    <span class="box-text"><?php echo e($item['name']); ?></span>
                                    <span class="box-number">
                                        <?php echo e($item['count']); ?> entries - <?php echo $item['percent']; ?> %
                                    </span>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" style="width: <?php echo e($item['percent']); ?>%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
<?php echo $__env->make('log-viewer::laravel-starter.partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    $(function() {
        new Chart(document.getElementById("stats-doughnut-chart"), {
            type: 'doughnut',
            data: <?php echo $chartData; ?>,
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/vendor/log-viewer/laravel-starter/dashboard.blade.php ENDPATH**/ ?>