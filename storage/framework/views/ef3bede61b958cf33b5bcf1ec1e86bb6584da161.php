<?php
$blogSecondLoop = 1;
$countBlogPost = count( $blogPost );
?>
<?php if($countBlogPost > 0): ?>
    <?php $__currentLoopData = $blogPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-md-4">
            <div class="blog-item">
                <div class="blog-top">
                    <?php
                    $sdTitle = strip_tags( stripslashes( $blog->title ), "<br><span><i><b>" );
                    $sdSubTitle = substr( $sdTitle, 0, 50 );
                    $sdTitle = ( strlen( $sdTitle ) > 50 ) ? $sdSubTitle . " ....." : $sdSubTitle;
                    $likeInfo['id'] = $blog->id;
                    $likeInfo['type'] = 'blog';

                    $blogUrl = url( "blog/" . $blog->slug );
                    ?>
                    <div class="blog-img">
                        <a href="<?php echo $blogUrl; ?>">
                            <img src="<?php echo SM::sm_get_the_src($blog->image, 369, 258); ?>"
                                 alt=" <?php echo e($sdTitle); ?>">
                        </a>
                    </div>
                    <div class="home-blog-meta">
                        <a href="javascript:0" class="nptl_like"
                           data-id="<?php echo e(urlencode(base64_encode($blog->id))); ?>"
                           data-type="blog">
                            <i class="fa fa-heart"></i>
                            <?php echo e(SM::getCountTitle($blog->likes, 'Like')); ?>

                        </a>
                        <a href="<?php echo e($blogUrl); ?>">
                            <i class="fa fa-comments"></i>
                            <?php echo e(SM::getCountTitle($blog->comments, 'Comment')); ?>

                        </a>
                        <a href="<?php echo e($blogUrl); ?>">
                            <i class="fa fa-eye"></i>
                            <?php echo e(SM::getCountTitle($blog->views, 'View')); ?>

                        </a>
                        <div class="b-date">
                            <strong><?php echo e(date("d", strtotime($blog->created_at))); ?></strong>
                            <b><?php echo e(date("F-y", strtotime($blog->created_at))); ?></b>
                        </div>
                    </div>
                    <h2 class="blog-title"><a
                                href="<?php echo $blogUrl; ?>">
                            <?php echo $sdTitle; ?>

                        </a>
                    </h2>
                    <?php
                    $des = $blog->short_description;
                    $des = ( $des != '' ) ? $des : $blog->long_description;
                    $sd = strip_tags( stripslashes( $des ), "<br><b>" );
                    $sdSub = substr( $sd, 0, 125 );
                    $sd = ( strlen( $sd ) > 125 ) ? $sdSub . " ....." : $sdSub;
                    ?>
                    <p><?php echo e($sd); ?></p>
                </div>
                <div class="blog-author pull-left">
                    <img src="<?php echo SM::sm_get_the_src($blog->user->image, 80, 80); ?>"
                         alt="<?php echo e($blog->user->username); ?>">
                    <p>Posted by</p>
                    <?php
                    $fname = $blog->user->firstname . ' ' . $blog->user->lastname;
                    $fname = ( $fname != '' ) ? $fname : $blog->user->username;
                    ?>
                    <p class="name"><?php echo e($fname); ?></p>
                </div>
                <a href="<?php echo $blogUrl; ?>" class="pull-right b_readMore">Read
                    More</a>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php if($loop->iteration %2==0): ?>
            <div class="clearfix"></div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-12">
        <?php echo $blogPost->links('common.pagination'); ?>

    </div>
<?php else: ?>
    <div class="alert alert-info"><i class="fa fa-info"></i> No Blog Post Found!</div>
<?php endif; ?>
