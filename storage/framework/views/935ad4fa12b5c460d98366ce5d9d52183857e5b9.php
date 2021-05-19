<?php
$site_name = SM::sm_get_site_name();
$site_name = SM::sm_string($site_name) ? $site_name : 'buckleup-bd';
$mobile = SM::get_setting_value('mobile');
$email = SM::get_setting_value('email');
$address = SM::get_setting_value('address');
$footer_logo = SM::smGetThemeOption("footer_logo", "");
$footer_widget2_title = SM::smGetThemeOption('footer_widget2_title', "Seo Services");
$footer_widget2_description = SM::smGetThemeOption('footer_widget2_description', "");
$footer_widget3_title = SM::smGetThemeOption('footer_widget3_title', "Company");
$footer_widget3_description = SM::smGetThemeOption('footer_widget3_description', "");
$footer_widget4_title = SM::smGetThemeOption('footer_widget4_title', "Technology");
$footer_widget4_description = SM::smGetThemeOption('footer_widget4_description', "");
$contact_branches = SM::smGetThemeOption("contact_branches");
$newsletter_success_title = SM::smGetThemeOption("newsletter_success_title", "Thank You For Subscribing!");
$newsletter_success_description = SM::smGetThemeOption("newsletter_success_description", "You're just one step away from being one of our dear susbcribers.Please check the Email provided and confirm your susbcription.");
$payment_method_image = SM::smGetThemeOption("payment_method_image", "");

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
?>

<footer class="bg_black">
    <div class="text_gray">
        <div class="container m-auto">
            <div class="row footer_row">
                <div class="col-5 item d-none">
                    <ul class="footer_menu list-unstyled">
                        <li class="<?= ($page == 'home') ? 'active' : '' ?>">
                            <a href="index.php?page=home">home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class=" <?= ($page == 'about') ? 'active' : '' ?>">
                            <a href="about.php?page=about#about_us">about</a>
                        </li>
                        <li>
                            <!--a href="team.php?page=team#team">team</a-->
                            <a href="team.php?page=team#team">team</a>
                        </li>
                        <li class=" <?= ($page == 'contact') ? 'active' : '' ?>">
                            <a href="contact.php?page=contact#contact_us">contact</a>
                        </li>
                        <li class=" <?= ($page == 'blog') ? 'active' : '' ?>">
                            <a href="javascript:void(0)">blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-8 item">
                    <label><h3 class="color_white">CONTACT</h3></label><br>

                    <!--<a class="color_white" href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a>-->
                     <!--<a class="color_white" href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a><br>-->
                     <!--<a class="color_white" href="tel:647 760 3403">647 760 3403</a>-->

                    <!--<br /><br />-->
                    <span class="color_white"> <?php echo $address; ?></span>
                     <br /><br />
                    <!--<a class="color_white" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>-->
                </div>
                <div class="col-3 item">
                    <div class="single-footer">
                        <?php echo Form::open(["method"=>"post", "action"=>'Front\HomeController@subscribe', 'class'=>'form-inline form-subscribe', 'id'=>"newsletterForm"]); ?>

                        <label><h3 style="color: #fff;">JOIN OUR NEWSLETTER</h3></label>
                        <input name="email" required type="email" class="form-control"  placeholder="Enter Your E-mail Address" style="margin-right:10px;" >
                        <button type="submit" value="Subscribe" id="newsletterFormSubmit"
                                class="btn btn-success form-control" style="border-radius:5px;">Submit</i>
                        </button>
                        <?php echo Form::close(); ?>


                    </div>
                </div>
                <div class="col-2 item d-none">
                    <ul class="list-unstyled footer_social text-right">
                        <li>
                            <a href="https://www.facebook.com/BCOnDemand" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/business-consultant-on-demand/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_last bg_gray_dark pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 color_white" style="margin:0; text-align:center;"><p style="margin:0;"> <?php echo e(SM::smGetThemeOption("copyright")); ?>  </p>
                   
                </div>
                
            </div>
        </div>
    </div>
</footer>