<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $description = SM::smGetThemeOption("wwr_description", "");
    ?>
    <div class="tab-content bg_gray" id="nav-tabContent">
        <div class="tab-pane fade show active" id="about_content" role="tabpanel"
             aria-labelledby="nav-home-tab">
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-12 col-lg-8">
                            <h1 class="d-none">About Us</h1>
                            <?php echo stripslashes($description); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>