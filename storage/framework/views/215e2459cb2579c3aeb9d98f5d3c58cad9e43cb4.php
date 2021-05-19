<?php $__env->startSection("title", "Payment"); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $title = SM::smGetThemeOption("payment_page_title");
    $subtitle = SM::smGetThemeOption("payment_page_subtitle");
    $image = SM::smGetThemeOption("payment_page_image");
    $description = SM::smGetThemeOption("payment_page_description");
    ?>
    <div class="contact_us" id="payment_page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <p><?php echo $title; ?></p>
                    <?php echo $description; ?>

                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="4KR7ZF3RUDWRJ">
                        <input type="image" src="<?php echo SM::sm_get_the_src($image, 200, 65); ?>" border="0" width="200px" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>