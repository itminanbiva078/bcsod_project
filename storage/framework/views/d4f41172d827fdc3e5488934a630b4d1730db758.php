
<?php $__env->startSection("title","Edit Service"); ?>
<?php $__env->startSection("content"); ?>
    <?php echo $__env->make(('nptl-admin/common/media/media_pop_up'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
            <?php echo Form::model($edit,["method"=>"PATCH","action"=>["Admin\Common\Services@update",$edit->id]]); ?>

            <?php echo $__env->make(("nptl-admin.common.service.form"),
            ['f_name'=>__("common.edit"), 'btn_name'=>__("common.update")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::close(); ?>

        </div>
        <!-- end row -->
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("nptl-admin.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>