<?php
$mobile = SM::get_setting_value('mobile');
$email = SM::get_setting_value('email');
$address = SM::get_setting_value('address');
$country = SM::get_setting_value('country');
if (Auth::check()) {
    $blogAuthor = Auth::user();
    $fname = $blogAuthor->firstname . " " . $blogAuthor->lastname;
    $fname = trim($fname) != '' ? $fname : $blogAuthor->username;
} else {
    $fname = __('common.join_login');
    $logonMoadal = 'data-toggle="modal" data-target="#loginModal"';
}
?>

<div class="ovrl text-center">
    <div class="d-table w-100 h-100">
        <div class="d-table-row">
            <div class="d-table-cell">
                <img src="{{ SM::sm_get_the_src(SM::sm_get_site_loading_logo(), 120, 237) }}" class="site_logo"
                     alt="{{ SM::get_setting_value('site_name') }}"/>
            </div>
        </div>
    </div>
</div>
<nav class="navbar main_navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="index"></a>
        <button class="navbar-toggler collapsed" style="float:left;" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="icon-bar">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            $menu = array(
                'nav_wrapper' => 'ul',
                'start_class' => 'navbar-nav mr-auto',
                'link_wrapper' => 'li',
                'home_class' => 'nav-item',
                'a_class' => 'nav-link',
                'dropdown_class' => 'nav-item',
                'subNavUlClass' => 'dropdown-menu mega_dropdown',
                'has_dropdown_wrapper_class' => 'dropdown',
                'show' => TRUE
            );
            SM::sm_get_menu($menu);
            ?>
            <ul class="navbar-nav nav-social ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="mailto:{{ $email }}" title="{{ $email }}">{{ $email }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tel:{{ $mobile }}" title="{{ $mobile }}">{{ $mobile }}</a>
                </li>
                @empty(!SM::smGetThemeOption("social_facebook"))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ SM::smGetThemeOption("social_facebook") }}" target="_blank"
                           title="Follow our facebook page"><i class="fab fa-facebook-f"></i></a>
                    </li>
                @endempty
                @empty(!SM::smGetThemeOption("social_linkedin"))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ SM::smGetThemeOption("social_linkedin") }}"
                           target="_blank" title="Follow our linked page"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                @endempty
            </ul>
        </div>
    </div>
</nav>