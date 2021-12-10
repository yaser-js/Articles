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
                    <i class="<?php echo e($module_icon); ?>"></i> <?php echo e(__('labels.backend.users.edit.title')); ?>

                    <small class="text-muted"><?php echo e(__('labels.backend.users.edit.action')); ?> </small>
                </h4>
                <div class="small text-muted">
                    <?php echo e(__('labels.backend.users.edit.sub-title')); ?>

                </div>
            </div>
            <!--/.col-->
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
        <hr>

        <div class="row mt-4">
            <div class="col">
                <?php echo e(html()->modelForm($user, 'PATCH', route('backend.users.update', $user->id))->class('form-horizontal')->open()); ?>


                    <div class="form-group row">
                        <?php echo e(html()->label(__('labels.backend.users.fields.email'))->class('col-sm-2 form-control-label')->for('email')); ?>


                        <div class="col-sm-10">
                            <?php echo e(html()->email('email')
                                ->class('form-control')
                                ->placeholder(__('labels.backend.users.fields.email'))
                                ->attribute('maxlength', 191)
                                ->required()); ?>

                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <?php echo e(html()->label(__('labels.backend.users.fields.password'))->class('col-5 col-sm-2 form-control-label')->for('password')); ?>


                        <div class="col-7 col-sm-10">
                            <a href="<?php echo e(route('backend.users.changePassword', $user->id)); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-key"></i> Change password</a>
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <?php echo e(html()->label('Profile')->class('col-5 col-sm-2 form-control-label')->for('profile')); ?>


                        <div class="col-7 col-sm-10">
                            <a href="<?php echo e(route("backend.users.profileEdit", $user->id)); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-user"></i> Update Profile</a>
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <?php echo e(html()->label(__('labels.backend.users.fields.confirmed'))->class('col-5 col-sm-2 form-control-label')->for('confirmed')); ?>


                        <div class="col-7 col-sm-10">
                            <?php if($user->email_verified_at == null): ?>
                            <a href="<?php echo e(route('backend.users.emailConfirmationResend', $user->id)); ?>" class="btn btn-outline-primary btn-sm " data-toggle="tooltip" title="Send Confirmation Email"><i class="fas fa-envelope"></i> Send Confirmation Email</a>
                            <?php else: ?>
                            <?php echo $user->confirmed_label; ?>

                            <?php endif; ?>
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <div class="col-6 col-sm-2">
                            <?php echo e(__('labels.backend.users.fields.social')); ?>

                        </div>
                        <div class="col-6 col-sm-10">
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $user->providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <i class="fab fa-<?php echo e($provider->provider); ?>"></i> <?php echo e(label_case($provider->provider)); ?>

                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <?php echo e(html()->label('Abilities')->class('col-sm-2 form-control-label')); ?>

                        <div class="col">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card card-accent-primary">
                                        <div class="card-header">
                                            <?php echo app('translator')->get('Roles'); ?>
                                        </div>
                                        <div class="card-body">
                                            <?php if($roles->count()): ?>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="checkbox">
                                                                <?php echo e(html()->label(html()->checkbox('roles[]', in_array($role->name, $userRoles), $role->name)->id('role-'.$role->id) . "&nbsp;". ucwords($role->name) . "&nbsp;(".$role->name.")")->for('role-'.$role->id)); ?>

                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <?php if($role->id != 1): ?>
                                                                <?php if($role->permissions->count()): ?>
                                                                    <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <i class="far fa-check-circle mr-1"></i><?php echo e($permission->name); ?>&nbsp;
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php else: ?>
                                                                    None
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                All Permissions
                                                            <?php endif; ?>
                                                        </div>
                                                    </div><!--card-->
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card card-accent-info">
                                        <div class="card-header">
                                            <?php echo app('translator')->get('Permissions'); ?>
                                        </div>
                                        <div class="card-body">
                                            <?php if($permissions->count()): ?>
                                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="checkbox">
                                                        <?php echo e(html()->label(html()->checkbox('permissions[]', in_array($permission->name, $userPermissions), $permission->name)->id('permission-'.$permission->id) . ' ' . $permission->name)->for('permission-'.$permission->id)); ?>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <?php echo e(html()->submit($text = icon('fas fa-save')." Save")->class('btn btn-success')); ?>

                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="float-right">
                                <?php if($$module_name_singular->status != 2 && $$module_name_singular->id != 1): ?>
                                <a href="<?php echo e(route('backend.users.block', $$module_name_singular)); ?>" class="btn btn-danger" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.block')); ?>" data-confirm="Are you sure?"><i class="fas fa-ban"></i></a>
                                <?php endif; ?>
                                <?php if($$module_name_singular->status == 2): ?>
                                <a href="<?php echo e(route('backend.users.unblock', $$module_name_singular)); ?>" class="btn btn-info" data-method="PATCH" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.unblock')); ?>" data-confirm="Are you sure?"><i class="fas fa-check"></i> Unblock</a>
                                <?php endif; ?>
                                <?php if($$module_name_singular->email_verified_at == null): ?>
                                <a href="<?php echo e(route('backend.users.emailConfirmationResend', $$module_name_singular->id)); ?>" class="btn btn-primary" data-toggle="tooltip" title="Send Confirmation Email"><i class="fas fa-envelope"></i></a>
                                <?php endif; ?>
                                <?php if($$module_name_singular->id != 1): ?>
                                <a href="<?php echo e(route("backend.$module_name.destroy", $$module_name_singular)); ?>" class="btn btn-danger" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-toggle="tooltip" title="<?php echo e(__('labels.backend.delete')); ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                <?php endif; ?>
                                <a href="<?php echo e(route("backend.$module_name.index")); ?>" class="btn btn-warning" data-toggle="tooltip" title="<?php echo e(__('labels.backend.cancel')); ?>"><i class="fas fa-reply"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                <?php echo e(html()->closeModelForm()); ?>

            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    Updated: <?php echo e($user->updated_at->diffForHumans()); ?>,
                    Created at: <?php echo e($user->created_at->isoFormat('LLLL')); ?>

                </small>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/backend/users/edit.blade.php ENDPATH**/ ?>