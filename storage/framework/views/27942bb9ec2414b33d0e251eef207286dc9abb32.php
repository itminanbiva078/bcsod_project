
<?php $__env->startSection("title", "Search result for '".htmlentities($s)."'"); ?>
<?php $__env->startSection("content"); ?>
    <!--BREADCRUMB START-->
    <section class="page-banner-section ab-banner-sec dod-search-banner">
        <div class="page-banner-section-inner">
            <div class="container">
                <div class="s-b-content">
                    <div class="blog-banner-contents text-center clearfix">
                        <div class="error-search-form">
                            <form action="<?php echo url("search"); ?>" method="get">
                                <input name="s" type="search" placeholder="Search your keyword..."
                                       value="<?php echo htmlentities($s); ?>">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="ab-page-breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-breadcrumb text-center">
                            <h2 class="ab-search-result-title">SEARCH RESULTS FOR "<?php echo htmlentities($s); ?>"</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BREADCRUMB END-->
    <section class="common-section contact-us-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if(count($results)>0): ?>
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $singleInfo['info'] = $single;
                            if ($type == 'Blog') {
                                $singleInfo["description"] = $single->short_description;
                                $singleInfo["image"] = SM::sm_get_the_src($single->image, 369, 258);
                                $singleInfo['url'] = url('blog/' . $single->slug);
                            } else {
                                $singleInfo["description"] = "";
                                $singleInfo["image"] = "";
                                $singleInfo['url'] = "";
                            }
                            ?>
                            <?php echo $__env->make("frontend.blogs.search_item", $singleInfo, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-sm-4">
                    <?php echo $__env->make("frontend.blogs.blog_sidebar", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>

            <?php else: ?>
                <div class="alert alert-info">
                    <i class="fa fa-info"></i> No Results Found!
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.master", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>