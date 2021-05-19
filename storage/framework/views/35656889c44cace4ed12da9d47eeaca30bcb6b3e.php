
<?php $__env->startSection("title",$page->page_title); ?>
<?php $__env->startSection("content"); ?>
    <!-- page wapper-->
    <div class="columns-container">
        <div class="container-fluid" id="columns">
            <!-- breadcrumb -->
        <?php echo $__env->make('frontend.common.breadcrumb', ['bannerImage'=>$page->image], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- ./breadcrumb -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-12" id="left_column">
                    <!-- block category -->
                    <div class="block left-module">
                        <p class="title_block"><?php echo e($page->page_title); ?></p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <p><?php echo stripslashes( $page->content ); ?></p>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- page heading-->
                </div>
            </div>
        </div>
    </div>
    <!-- ./page wapper-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>