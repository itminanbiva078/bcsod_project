@extends('frontend.master')
@section("title", "Contact")
@section('content')
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
    <div class="contact_us" id="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h1>{!! $title !!}</h1>
                    <p>{!! $subtitle !!}</p>

                    <p>Fields marked with an asterisk (*) are mandatory.</p>
                    {!! Form::open(['method'=>'post', 'action'=>'Front\HomeController@send_mail', 'id'=>'contactMail']) !!}
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <input type="text" name="fullname" required="true" placeholder="Name *" id="fullname"
                                       class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <input type="email" name="email" required="true" placeholder="Email *" id="email"
                                       class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <input type="text" name="subject" required="true" placeholder="Subject *"
                                       id="subject" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <input type="text" name="phone" required="true" placeholder="Phone / Mobile *"
                                       id="phone" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <textarea class="form-control" name="message" required="true" placeholder="Message *"
                                          id="message" rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                                        async defer></script>
                                <div id="html_element"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <input type="submit" id="btn-send-contact" name="contact_form_submit_btn" value="Send"
                                       class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                    <ul class="serviceMailErrors mailErrorList concatMailErrors">
                    </ul>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection