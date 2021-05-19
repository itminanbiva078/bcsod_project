<?php $__env->startSection("title", "Blog"); ?>
<?php $__env->startSection("content"); ?>
    <?php
    $countStickyPost = count($stickyBlogPost);
    $isBreadcrumbEnable = SM::smGetThemeOption("blog_is_breadcrumb_enable", false);

    $pagination = [
        [
            "title" => "Blog"
        ]
    ];
    $title = SM::smGetThemeOption("blog_banner_title");
    $subtitle = SM::smGetThemeOption("blog_banner_subtitle");
    $bannerImage = SM::smGetThemeOption("blog_banner_image");
    ?>
    <!--BREADCRUMB END-->
    <div class="columns-container">
        <div class="container-fluid" id="columns">
            <?php echo $__env->make('frontend.common.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php if($countStickyPost>0): ?>
                <div class="row mb60">
                    <?php $__currentLoopData = $stickyBlogPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-12">
                            <div class="blog-featured-post"
                                 style="background: url(<?php echo SM::sm_get_the_src( $blog->image); ?>)">
                                <div class="blog-featured-post-content">
                                    <a href="<?php echo url( "blog/$blog->slug" ); ?>">
                                        <div class="blog-featured-content text-center">
                                            <time><?php echo e(date("F d, Y", strtotime($blog->created_at))); ?></time>
                                            <h3><?php echo e($blog->title); ?></h3>
                                            <p><?php echo e($blog->short_description); ?></p>
                                            <small class="doddle-btn "><span></span><b></b>Read More</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-sm-8">
                    <div class="row" id="sm_list">
                        <?php echo $__env->make('frontend.blogs.blog_list_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?php echo $__env->make("frontend.blogs.blog_sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>