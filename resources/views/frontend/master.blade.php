<html>
<head>
    @include('frontend.common.meta')
    @include('frontend.inc.css')
    @include('frontend.common.additional_css')
    @stack('style')
</head>
<body>
<div id="fb-root"></div>
{{-- @include('frontend.common.login_modal')--}}
@include('frontend.inc.header')
@include('frontend.common.s_w_message')
<main>
    <div class="main_slider">
        @include('frontend.common.slider')
        <div class="logo_container">
            <div class="d-table w-100 h-100">
                <div class="d-table-row">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-5 p-0 logo text-right">
                                    <img src="{{ SM::sm_get_the_src( SM::sm_get_site_logo(), 300, 142 ) }}"
                                         class="site_logo"
                                         alt="{{SM::get_setting_value( 'site_name' )}}"/>
                                    <div class="line d-none d-md-block"></div>
                                </div>
                                <div class="col-7 d-none d-md-block">
                                    <p class="text-white business_text home">{{ SM::get_setting_value( 'about' ) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.common.tab_items')

    @yield('content')
</main>
@include('frontend.inc.footer')
<!-- all js scripts including custom js -->
<!-- scripts -->
@include('frontend.inc.js')
{{--@include('frontend.common.additional_js')--}}
@stack('script')

<div class="modal fade" id="item1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success Stories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Crafting compelling investor presentation and pitch deck that differentiate you from your peers. We
                    leveraging data analytics, financial models and market research to make a you more effective
                    presentation or pitch deck in appealing investor’s interest.</p>
                <img src="images/story_img1.jpg" alt=""/>
            </div>
        </div>
    </div>
</div>
</body>
</html>


