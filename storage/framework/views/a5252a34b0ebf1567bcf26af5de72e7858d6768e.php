<div class="text-right">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_'.$module_name)): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.edit','data' => ['route' => ''.route("backend.$module_name.edit", $data).'','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']]); ?>
<?php $component->withName('buttons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.route("backend.$module_name.edit", $data).'','title' => ''.e(__('Edit')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.show','data' => ['route' => ''.route("backend.$module_name.show", $data).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']]); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.route("backend.$module_name.show", $data).'','title' => ''.e(__('Show')).' '.e(ucwords(Str::singular($module_name))).'','small' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH E:\xamp\htdocs\laravel\Articles-master\resources\views/backend/includes/action_column.blade.php ENDPATH**/ ?>