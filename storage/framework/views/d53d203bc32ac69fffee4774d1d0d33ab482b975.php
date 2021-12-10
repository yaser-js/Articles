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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend-breadcrumb-item','data' => ['route' => ''.e(route('log-viewer::dashboard')).'','icon' => ''.e($module_icon).'']]); ?>
<?php $component->withName('backend-breadcrumb-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.e(route('log-viewer::dashboard')).'','icon' => ''.e($module_icon).'']); ?>
        <?php echo e(__('Log Viewer Dashboard')); ?>

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
<?php $component->withAttributes(['type' => 'active']); ?><?php echo e(__('Logs by Date')); ?> <?php echo $__env->renderComponent(); ?>
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
                    <i class="<?php echo e($module_icon); ?>"></i> <?php echo e(__('Logs by Date')); ?>

                    <small class="text-muted">List </small>
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
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th scope="col" class="<?php echo e($key == 'date' ? 'text-left' : 'text-center'); ?>">
                                    <?php if($key == 'date'): ?>
                                        <?php echo e($header); ?>

                                    <?php else: ?>
                                        <span class="badge badge-level-<?php echo e($key); ?>">
                                            <?php echo log_styler()->icon($key) . ' ' . $header; ?>

                                        </span>
                                    <?php endif; ?>
                                </th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <th scope="col" class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($rows->count() > 0): ?>
                                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td class="<?php echo e($key == 'date' ? 'text-left' : 'text-center'); ?>">
                                            <?php if($key == 'date'): ?>
                                                <a href="<?php echo e(route('log-viewer::logs.show', [$date])); ?>" class="btn btn-info">
                                                    <?php echo e($value); ?>

                                                </a>
                                                <span class="badge badge-primary"></span>
                                            <?php elseif($value == 0): ?>
                                                <span class="badge empty"><?php echo e($value); ?></span>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('log-viewer::logs.filter', [$date, $key])); ?>">
                                                    <span class="badge badge-level-<?php echo e($key); ?>"><?php echo e($value); ?></span>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <td class="text-right">
                                        <a href="<?php echo e(route('log-viewer::logs.show', [$date])); ?>" class="btn btn-sm btn-info">
                                            <i class="fas fa-search"></i>
                                        </a>
                                        <a href="<?php echo e(route('log-viewer::logs.download', [$date])); ?>" class="btn btn-sm btn-success">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#delete-log-modal" class="btn btn-sm btn-danger" data-log-date="<?php echo e($date); ?>">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="11" class="text-center">
                                        <span class="badge badge-secondary"><?php echo e(trans('log-viewer::general.empty-logs')); ?></span>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    <?php echo app('translator')->get('Total'); ?> <?php echo $rows->total(); ?>

                </div>
            </div>
            <div class="col-5">
                <div class="float-right">
                    <?php echo $rows->render(); ?>

                </div>
            </div>
        </div>
    </div>
</div>



<div id="delete-log-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="delete-log-form" action="<?php echo e(route('log-viewer::logs.delete')); ?>" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="date" value="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Delete Log File'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary mr-auto" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-danger" data-loading-text="Loading&hellip;">DELETE FILE</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('after-scripts'); ?>
    <script>
        $(function () {
            var deleteLogModal = $('div#delete-log-modal'),
                deleteLogForm  = $('form#delete-log-form'),
                submitBtn      = deleteLogForm.find('button[type=submit]');

            $("a[href='#delete-log-modal']").on('click', function(event) {
                event.preventDefault();
                var date = $(this).data('log-date');
                deleteLogForm.find('input[name=date]').val(date);
                deleteLogModal.find('.modal-body p').html(
                    'Are you sure you want to <span class="badge badge-danger">DELETE</span> this log file <span class="badge badge-primary">' + date + '</span> ?'
                );

                deleteLogModal.modal('show');
            });

            deleteLogForm.on('submit', function(event) {
                event.preventDefault();
                submitBtn.button('loading');

                $.ajax({
                    url:      $(this).attr('action'),
                    type:     $(this).attr('method'),
                    dataType: 'json',
                    data:     $(this).serialize(),
                    success: function(data) {
                        submitBtn.button('reset');
                        if (data.result === 'success') {
                            deleteLogModal.modal('hide');
                            location.reload();
                        }
                        else {
                            alert('AJAX ERROR ! Check the console !');
                            console.error(data);
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        alert('AJAX ERROR ! Check the console !');
                        console.error(errorThrown);
                        submitBtn.button('reset');
                    }
                });

                return false;
            });

            deleteLogModal.on('hidden.bs.modal', function() {
                deleteLogForm.find('input[name=date]').val('');
                deleteLogModal.find('.modal-body p').html('');
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-styles'); ?>
<?php echo $__env->make('log-viewer::laravel-starter.partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/vendor/log-viewer/laravel-starter/logs.blade.php ENDPATH**/ ?>