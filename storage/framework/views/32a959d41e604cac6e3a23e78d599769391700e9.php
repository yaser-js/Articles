<div class="row">
    <div class="col-5">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'created_by_alias';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = "Hide Author User's Name and use Alias";
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'intro';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'content';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'featured_image';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            <?php echo Form::label("$field_name", "$field_lable"); ?> <?php echo fielf_required($required); ?>

            <div class="input-group mb-3">
                <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", 'aria-label'=>'Image', 'aria-describedby'=>'button-image'])); ?>

                <div class="input-group-append">
                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> <?php echo app('translator')->get('Browse'); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
<div class="user-image mb-3 text-center">
    <div class="imgPreview"> </div>
</div>

 Images
<div class="custom-file">

    <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
    <label class="custom-file-label" for="images">Choose image</label>
</div>   </div>
    </div>
</div>




<div class="row">
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'category_id';
            $field_lable = __("article::$module_name.$field_name");
            $field_relation = "category";
            $field_placeholder = __("Select an option");
            $required = "required";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->select($field_name, isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'')->placeholder($field_placeholder)->class('form-control select2-category')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'type';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
                'Article'=>'Article',
                'Feature'=>'Feature',
                'News'=>'News',
            ];
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <?php
            $field_name = 'is_featured';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
                '1'=>'Yes',
                '0'=>'No',
            ];
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <?php
            $field_name = 'tags_list[]';
            $field_lable = __("article::$module_name.tags");
            $field_relation = "tags";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->multiselect($field_name,
                isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'):'',
                isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('id')->toArray():''
                )->class('form-control select2-tags')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = __("Select an option");
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
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'published_at';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <div class="input-group date datetime" id="<?php echo e($field_name); ?>" data-target-input="nearest">
                <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control datetimepicker-input')->attributes(["$required", 'data-target'=>"#$field_name"])); ?>

                <div class="input-group-append" data-target="#<?php echo e($field_name); ?>" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-5">
        <div class="form-group">
            <?php
            $field_name = 'meta_title';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <?php
            $field_name = 'meta_keywords';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            <?php
            $field_name = 'order';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'meta_description';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="form-group">
            <?php
            $field_name = 'meta_og_image';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'meta_og_url';
            $field_lable = __("article::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            <?php echo e(html()->label($field_lable, $field_name)); ?> <?php echo fielf_required($required); ?>

            <?php echo e(html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])); ?>

        </div>
    </div>
</div>
<div></div>
<style>
    .container {
        max-width: 500px;
    }
    dl, ol, ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .imgPreview img {
        padding: 8px;
        max-width: 100px;
    }
</style>

<!-- Select2 Library -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.library.select2','data' => []]); ?>
<?php $component->withName('library.select2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.library.datetime-picker','data' => []]); ?>
<?php $component->withName('library.datetime-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->startPush('after-styles'); ?>
<!-- File Manager -->
<link rel="stylesheet" href="<?php echo e(asset('vendor/file-manager/css/file-manager.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
<script type="text/javascript">
$(document).ready(function() {
    $('.select2-category').select2({
        theme: "bootstrap",
        placeholder: '<?php echo app('translator')->get("Select an option"); ?>',
        minimumInputLength: 2,
        allowClear: true,
        ajax: {
            url: '<?php echo e(route("backend.categories.index_list")); ?>',
            dataType: 'json',
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });

    $('.select2-tags').select2({
        theme: "bootstrap",
        placeholder: '<?php echo app('translator')->get("Select an option"); ?>',
        minimumInputLength: 2,
        allowClear: true,
        ajax: {
            url: '<?php echo e(route("backend.tags.index_list")); ?>',
            dataType: 'json',
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });
});
</script>

<!-- Date Time Picker & Moment Js-->
<script type="text/javascript">
$(function() {
    $('.datetime').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        icons: {
            time: 'far fa-clock',
            date: 'far fa-calendar-alt',
            up: 'fas fa-arrow-up',
            down: 'fas fa-arrow-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right',
            today: 'far fa-calendar-check',
            clear: 'far fa-trash-alt',
            close: 'fas fa-times'
        }
    });
});
</script>

<script type="text/javascript" src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendor/file-manager/js/file-manager.js')); ?>"></script>

<script type="text/javascript">

CKEDITOR.replace('content', {filebrowserImageBrowseUrl: '/file-manager/ckeditor', language:'<?php echo e(App::getLocale()); ?>', defaultLanguage: 'en'});

document.addEventListener("DOMContentLoaded", function() {

  document.getElementById('button-image').addEventListener('click', (event) => {
    event.preventDefault();

    window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
  });
});

// set file link
function fmSetLink($url) {
  document.getElementById('featured_image').value = $url;
}

   // Multiple images preview with JavaScript
   var multiImgPreview = function(input, imgPreviewPlaceholder) {

if (input.files) {
    var filesAmount = input.files.length;

    for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
        }

        reader.readAsDataURL(input.files[i]);
    }
}

};

$('#images').on('change', function() {
multiImgPreview(this, 'div.imgPreview');
});
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH E:\xamp\htdocs\laravel\Articles-master\Modules/Article\Resources/views/backend/posts/form.blade.php ENDPATH**/ ?>