<?php if(isset($bannerImage) && !empty($bannerImage)): ?>
    <section class="page-banner-section about-banner-section" style="margin-bottom: 10px;">
        <div class="blog-banner-sec "
             style="background:url( <?php echo SM::sm_get_the_src( $bannerImage ); ?>) no-repeat center center /cover">
            <div class="container">
                <div class="row">
                    <div class="blog-banner-contents text-center">
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<div class="breadcrumb clearfix">

    <?php if(Route::current()->getName() != 'home'): ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                
                <?php
                    $link = url('/');
                ?>
                <a href="/"><i class="fa fa-home"></i> Home</a><i class="fa fa-chevron-right"
                                                                  style="padding: 2px 10px;"></i>
                <?php $link = "" ?>
                <?php for($i = 1; $i <= count(Request::segments()); $i++): ?>
                    <?php if($i < count(Request::segments()) & $i > 0): ?>
                        <?php $link .= "/" . Request::segment($i); ?>
                        <a href="<?= $link ?>"><?php echo e(ucwords(str_replace('-',' ',Request::segment($i)))); ?></a> <i
                                class="fa fa-chevron-right" style="padding: 2px 10px;"></i>
                    <?php else: ?> <?php echo e(ucwords(str_replace('-',' ',Request::segment($i)))); ?>

                    <?php endif; ?>
                <?php endfor; ?>
                
                
                
                
                
                
                
                
                
                
                
                
            </ol>
        </nav>
    <?php endif; ?>
</div>