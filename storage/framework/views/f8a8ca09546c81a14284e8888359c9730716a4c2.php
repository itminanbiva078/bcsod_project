
<?php $__env->startSection('title','Add Page'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make(('nptl-admin/common/media/media_pop_up'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php

	use App\SM\SM_Front;
	use App\SM\SM_Admin;
	?>
    <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
            <?php echo Form::model($page_info,["method"=>"PATCH","action"=>["Admin\Common\Page@update_page",$page_info->id]]); ?>

            <?php echo $__env->make(("nptl-admin/common/page/page_form"),
            ['f_name'=>__("common.edit"), 'btn_name'=>__("common.update")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::close(); ?>

        </div>
        <!-- end row -->
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(('nptl-admin/master'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>