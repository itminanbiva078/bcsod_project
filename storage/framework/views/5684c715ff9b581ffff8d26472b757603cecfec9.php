<?php
$sliders = \App\Model\Common\Slider::Published()->get();
?>

<?php if(isset($sliders) && count($sliders)>0): ?>
    <?php
    $slider_change_autoplay = (int)SM::smGetThemeOption("slider_change_autoplay", 4);
    $slider_change_autoplay *= 3000;
    ?>
    <div id="main_slider" class="carousel slide carousel-fade h-100" data-ride="carousel">
        <div class="carousel-inner h-100">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                if ($key == 0) {
                    $active = 'active';
                } else {
                    $active = '';
                }
                ?>
                <div class="carousel-item <?php echo e($active); ?>">
                    <img src="<?php echo SM::sm_get_the_src($slider->image, 1903, 1051); ?>" class="d-block" alt="...">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>