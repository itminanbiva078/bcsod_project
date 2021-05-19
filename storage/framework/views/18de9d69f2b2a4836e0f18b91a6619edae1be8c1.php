<html>
<head>
    <?php echo $__env->make('frontend.common.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.inc.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.common.additional_css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldPushContent('style'); ?>
</head>
<body>
<div id="fb-root"></div>

<?php echo $__env->make('frontend.inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.common.s_w_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<main>
    <div class="main_slider">
        <?php echo $__env->make('frontend.common.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="logo_container">
            <div class="d-table w-100 h-100">
                <div class="d-table-row">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-5 p-0 logo text-right">
                                    <img src="<?php echo e(SM::sm_get_the_src( SM::sm_get_site_logo(), 300, 142 )); ?>"
                                         class="site_logo"
                                         alt="<?php echo e(SM::get_setting_value( 'site_name' )); ?>"/>
                                    <div class="line d-none d-md-block"></div>
                                </div>
                                <div class="col-7 d-none d-md-block">
                                    <p class="text-white business_text home"><?php echo e(SM::get_setting_value( 'about' )); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('frontend.common.tab_items', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>
</main>
<?php echo $__env->make('frontend.inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- all js scripts including custom js -->
<!-- scripts -->
<?php echo $__env->make('frontend.inc.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldPushContent('script'); ?>

<div class="modal fade" id="item1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success Stories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Crafting compelling investor presentation and pitch deck that differentiate you from your peers. We
                    leveraging data analytics, financial models and market research to make a you more effective
                    presentation or pitch deck in appealing investor’s interest.</p>
                <img src="images/story_img1.jpg" alt=""/>
            </div>
        </div>
    </div>
</div>
</body>
</html>


