<?php
$countFiles = count($files);
$smPaginationMedia = config("constant.smPaginationMedia");
?>
<div>
    Total Media Selected = <strong><span class="media_count" id="media_count"><?php echo e($countFiles); ?></span></strong>
    <label for="master">
        <input type="checkbox" class="select_all" id="master">All Select
    </label>
    <button style="margin: 5px;" class="btn btn-danger btn-xs delete_all" data-url="">Delete All</button>

</div>
<div class="row">
    <!-- SuperBox -->
    <div id="general-content" class="superbox col-sm-12 media_search_data">
        <?php if($countFiles>0): ?>
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $filename = $file->slug;
                $img = \App\SM\SM::sm_get_galary_src_data_img($filename, $file->is_private == 1 ? true : false);
                $src = $img['src'];
                $data_img = $img['data_img'];
                $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                ?>

                <div class="superbox-list sm_file_<?php echo e($file->id); ?>">
                    <input name="multi_select_media[]" type="checkbox" class="sub_chk" data-id="<?php echo e($file->id); ?>">
                    <?php if($file->is_private == 1): ?>
                        <span class="private_media" title="Private File"><i class="fa fa-lock"></i></span>
                    <?php endif; ?>
                    <img title="<?php echo e($file->title); ?>" src="<?php echo e($src); ?>" data-img="<?php echo e($data_img); ?>" img_id="<?php echo e($file->id); ?>"
                         is_private="<?php echo e($file->is_private); ?>"
                         img_slug="<?php echo e($filename); ?>" alt="<?php echo e($file->alt); ?>"
                         ftype="<?php echo e($extension); ?>"
                         caption="<?php echo e($file->caption); ?>" description="<?php echo e($file->description); ?>"
                         class="superbox-img">
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="alert alert-warning fade in">
                <button class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                <i class="fa-fw fa fa-warning"></i>
                <strong><?php echo e(__("media.warning")); ?></strong>
                <?php echo e(__("media.noMediaFileFound")); ?>

            </div>
        <?php endif; ?>
        <div class="superbox-float"></div>
    </div>
    <div class="col-sm-12 text-center" style="<?php echo e($countFiles >= $smPaginationMedia ? '': 'display:none;'); ?>">
        <button class="btn btn-block btn-primary" id="sm_media_load_more"
                data-need_to_load="<?php echo e($smPaginationMedia); ?>"
                data-loaded="<?php echo e($countFiles); ?>"><i class="fa fa-refresh"></i> Load More
        </button>
    </div>
    <!-- /SuperBox -->
    <div class="superbox-show" style="height:300px; display: none">
    </div>
</div>
<?php $__env->startSection('footer_script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
    <script type="text/javascript">
        $('.media_count').text('(0)');
        var fnUpdateCount = function () {
            var generallen = $("#general-content input[name='multi_select_media[]']:checked").length;
            if (generallen > 0) {
                $(".media_count").text('(' + generallen + ')');
            } else {
                $('.media_count').text('(0)');
            }
        };

        $("#general-content input:checkbox").on("change", function () {
            fnUpdateCount();
        });

        $('.select_all').change(function () {
            var checkthis = $(this);
            var checkboxes = $("#general-content input:checkbox");

            if (checkthis.is(':checked')) {
                checkboxes.prop('checked', true);
            } else {
                checkboxes.prop('checked', false);
            }
            fnUpdateCount();
        });

        $(document).ready(function () {

            $('#master').on('click', function (e) {
                if ($(this).is(':checked', true)) {
                    $(".sub_chk").prop('checked', true);
                } else {
                    $(".sub_chk").prop('checked', false);
                }
            });
            $('.delete_all').on('click', function (e) {
                var allVals = [];
                $(".sub_chk:checked").each(function () {
                    allVals.push($(this).attr('data-id'));
                });
                if (allVals.length <= 0) {
                    alert("Please select row.");
                } else {
                    var check = confirm("Are you sure you want to delete this row?");
                    if (check == true) {
                        var join_selected_values = allVals.join(",");
                        $.ajax({
                            url: "<?php echo e(route('deleteMultipleMedia')); ?>",
                            // url: $(this).data('url'),
                            type: 'get',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids=' + join_selected_values,
                            success: function (data) {
                                if (data['success']) {
                                    $(".sub_chk:checked").each(function () {
                                        $(this).parents(".superbox-list").remove();
                                    });
                                    // alert(data['success']);
                                    location.reload()
                                } else if (data['error']) {
                                    alert(data['error']);
                                } else {
                                    alert('Whoops Something went wrong!!');
                                }
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });

                        $.each(allVals, function (index, value) {
                            $('table tr').filter("[data-row-id='" + value + "']").remove();
                        });
                    }
                }
            });
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.trigger('confirm');
                }
            });
            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();
                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
                return false;
            });
        });
    </script>
<?php $__env->stopSection(); ?>