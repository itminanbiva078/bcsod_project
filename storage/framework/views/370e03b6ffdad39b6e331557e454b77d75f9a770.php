<?php $__env->startSection("title", "Teams"); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $title = SM::smGetThemeOption("team_banner_title");
    $subtitle = SM::smGetThemeOption("team_banner_subtitle");
    $bannerImage = SM::smGetThemeOption("team_banner_image");

    $teamTitle = SM::smGetThemeOption("team_title");
    $teamSubtitle = SM::smGetThemeOption("team_subtitle");
    $teams = SM::smGetThemeOption("teams");
    ?>
    <?php if(count($teams)>0): ?>
        <div class="team_content" id="team">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 item">
                            <div class="row item">
                                <div class="col-4 col-md-2 pr-0 pr-md-2 picture_col">
                                    <img src="<?php echo SM::sm_get_the_src($team["team_image"], 77, 77); ?>"
                                         class="rounded-circle member_image w-100"
                                         alt="<?php echo e($team["title"]); ?>"/>
                                </div>
                                <div class="col-8 col-md-9">
                                    <h3><span class="name"><?php echo e($team["title"]); ?></span><br> <?php echo e($team["designation"]); ?>

                                    </h3>
                                    <p><?php echo $team["description"]; ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>