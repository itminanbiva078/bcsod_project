@extends('frontend.master')
@section("title", "Teams")
@section('content')
    <?php
    $title = SM::smGetThemeOption("team_banner_title");
    $subtitle = SM::smGetThemeOption("team_banner_subtitle");
    $bannerImage = SM::smGetThemeOption("team_banner_image");

    $teamTitle = SM::smGetThemeOption("team_title");
    $teamSubtitle = SM::smGetThemeOption("team_subtitle");
    $teams = SM::smGetThemeOption("teams");
    ?>
    @if(count($teams)>0)
        <div class="team_content" id="team">
            <div class="container">
                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 item">
                            <div class="row item">
                                <div class="col-4 col-md-2 pr-0 pr-md-2 picture_col">
                                    <img src="{!! SM::sm_get_the_src($team["team_image"], 77, 77) !!}"
                                         class="rounded-circle member_image w-100"
                                         alt="{{ $team["title"] }}"/>
                                </div>
                                <div class="col-8 col-md-9">
                                    <h3><span class="name">{{ $team["title"] }}</span><br> {{ $team["designation"] }}
                                    </h3>
                                    <p>{!! $team["description"] !!} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection