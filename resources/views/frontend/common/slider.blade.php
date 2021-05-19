<?php
$sliders = \App\Model\Common\Slider::Published()->get();
?>

@if(isset($sliders) && count($sliders)>0)
    <?php
    $slider_change_autoplay = (int)SM::smGetThemeOption("slider_change_autoplay", 4);
    $slider_change_autoplay *= 3000;
    ?>
    <div id="main_slider" class="carousel slide carousel-fade h-100" data-ride="carousel">
        <div class="carousel-inner h-100">
            @foreach($sliders as $key=>$slider)
                <?php
                if ($key == 0) {
                    $active = 'active';
                } else {
                    $active = '';
                }
                ?>
                <div class="carousel-item {{ $active }}">
                    <img src="{!! SM::sm_get_the_src($slider->image, 1903, 1051) !!}" class="d-block" alt="...">
                </div>
            @endforeach
        </div>
    </div>
@endif