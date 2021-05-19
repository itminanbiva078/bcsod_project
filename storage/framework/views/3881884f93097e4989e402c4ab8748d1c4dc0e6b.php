<?php echo Html::style('frontend/bootstrap/dist/css/bootstrap.min.css'); ?>

<?php echo Html::style('frontend/@fortawesome/fontawesome-free/css/all.css'); ?>

<?php echo Html::style('frontend/css/style.css'); ?>

<?php echo Html::style('frontend/css/responsive.css'); ?>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo Html::script('frontend/js/jquery/dist/jquery.min.js'); ?>

<style>
    .color_white{
        color:#fff;
    }
</style>
<script type="text/javascript">
    var onloadCallback = function () {
        grecaptcha.render('html_element', {
            'sitekey': '6Lfecp0UAAAAAHoo-WMERDWM-bq5zGSud1N452Zu'
        });
    };
</script>