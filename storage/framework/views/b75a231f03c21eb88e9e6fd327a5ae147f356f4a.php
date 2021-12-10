<div class="row">
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'group_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="form-group">
            <?php
            $field_name = 'image';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->input("file", $field_name)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <?php if(isset($$module_name_singular) && $$module_name_singular->getMedia($module_name)->first()): ?>
    <div class="col-4">
        <div class="float-right">
            <figure class="figure">
                <a href="<?php echo e(asset($$module_name_singular->$field_name)); ?>" data-lightbox="image-set" data-title="Path: <?php echo e(asset($$module_name_singular->$field_name)); ?>">
                    <img src="<?php echo e(asset($$module_name_singular->getMedia($module_name)->first()->getUrl('thumb300'))); ?>" class="figure-img img-fluid rounded img-thumbnail" alt="">
                </a>
                <!-- <figcaption class="figure-caption">Path: </figcaption> -->
            </figure>
        </div>
    </div>
    <?php endif; ?>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'meta_title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'meta_keyword';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'meta_description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "required";
            $select_options = [
                '1'=>'Published',
                '0'=>'Unpublished',
                '2'=>'Draft'
            ];
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<?php /**PATH E:\xamp\htdocs\laravel\laravel-articles\resources\views/modules/tag/backend/tags/form.blade.php ENDPATH**/ ?>