<?php $__env->startSection("title", "Contact"); ?>
<?php $__env->startSection('content'); ?>
<!-- page wapper-->
    <?php
    $contact_form_title = SM::smGetThemeOption("contact_form_title");
    $contact_title = SM::smGetThemeOption("contact_title");
    $contact_subtitle = SM::smGetThemeOption("contact_subtitle");
    $contact_des_title = SM::smGetThemeOption("contact_des_title");
    $contact_description = SM::smGetThemeOption("contact_description");
    $title = SM::smGetThemeOption("contact_banner_title");
    $subtitle = SM::smGetThemeOption("contact_banner_subtitle");
    $bannerImage = SM::smGetThemeOption("contact_banner_image");

    $contact_location_title = SM::smGetThemeOption("contact_location_title");
    $contact_location_subtitle = SM::smGetThemeOption("contact_location_subtitle");
    $mobile = SM::get_setting_value('mobile');
    $email = SM::get_setting_value('email');
    $address = SM::get_setting_value('address');
    ?>





<div class="root-container">

        <main class="">
            
            
            
            <section class="calculator-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            
                            <div id="anchorpoint"></div>
                            <div class="calc-panel reveal-block">
                                <div class="calc-form">
                                    <form class="form-horizontal" id="emicalc">
                                        <!-- Multiple Radios (inline) -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="radios">
                                                Annual Rate of Interest (%):</label>
                                            <div class="col-md-7">
                                                <div id="rateOfInterest" class="slider">
                                                </div>
                                            </div>
                                            <div class="col-md-2 pos-rel">
                                                <div class="data-entry ">
                                                    <input type="text" id="inputROI" class="dataInputControl roiEntry" value="11.5">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group martp10">
                                            <label class="col-md-3 control-label" for="textinput">
                                                Tenure (Years) :</label>
                                            <div class="col-md-7">
                                                <div id="tenure" class="slider">
                                                </div>
                                            </div>
                                            <div class="col-md-2 pos-rel">
                                                <div class="data-entry">
                                                    <input type="text" id="inputEMITenure" value="1" class="dataInputControl tenureEntry">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group martp60">
                                            <label class="col-md-3 control-label" for="textinput">
                                                Amount (<i class="fa fa-inr" aria-hidden="true"></i>):</label>
                                            <div class="col-md-7">
                                                <div id="loanAmount" class="slider">
                                                </div>
                                            </div>
                                            <div class="col-md-2 pos-rel">
                                                <div class="data-entry">
                                                    <input type="text" id="inputLoanAmount" value="" class="dataInputControl amountEntry">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-btn martp40">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button name="submit" class="jsCalcEMI btn btn-primary ">
                                                    Submit</button>
                                                <button type="reset" name="reset" class="btn btn-cancel">
                                                    Reset</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <small>* This Education Loan EMI Calculator is for illustrative and educational purposes only. Auxilo does not guarantee its accuracy or applicability to your circumstances. </small>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="calc-output hidden">
                                    <div class="row">
                                        <div class="col-sm-1 col-md-offset-2">
                                            <img src="../resources/img/icon/calculator-icon.png" alt="calculator icon">
                                        </div>
                                        <div class="col-sm-11 col-md-8">
                                            <h4>
                                                Your Monthly <br class="hidden-md hidden-lg"> Education Loan EMI: <span id="resultValue">
                                                -</span>
                                            </h4>
                                            <p>
                                                Monthly amount paid to your Education Loan provider</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 col-md-pull-9">
                            <ul class="tabs-liks">
                                <li class="active hidden-xs hidden-sm reveal-block"><a href="emi-calculator">EMI Calculator </a></li>
                                <li class="reveal-block"><a href="eligibility-calculator.php">Eligibility Calculator</a></li>
                                <!-- <li><a href="../currency-calculator">Currency Converter</a></li> -->
                                <li class="reveal-block"><a href="repayment-calculator">Loan Repayment Calculator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

           



        </main>
       
    </div>
    <script src="https://www.auxilo.com/resources/js/main.min.js">
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>