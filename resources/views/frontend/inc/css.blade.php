{!!Html::style('frontend/bootstrap/dist/css/bootstrap.min.css')!!}
{!!Html::style('frontend/@fortawesome/fontawesome-free/css/all.css')!!}
{!!Html::style('frontend/css/style.css')!!}
{!!Html::style('frontend/css/responsive.css')!!}

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{!!Html::script('frontend/js/jquery/dist/jquery.min.js')!!}
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