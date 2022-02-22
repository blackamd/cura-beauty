<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'web/css/custom-animate.css',
        'web/css/flaticon.css',
        'web/css/font-awesome.css',
        'web/css/hover.css',
        'web/css/jquery.bootstrap-touchspin.css',
        'web/css/jquery.fancybox.min.css',
        'web/css/jquery.mCustomScrollbar.min.css',
        'web/css/jquery-ui.css',
        'web/css/owl.css',
        'web/css/bootstrap.css',
        'web/css/style.css',
        'web/css/responsive.css',
        'web/css/animate.css',
        'web/css/animation.css',
    ];
    public $js = [
        'web/js/jquery.js',
        'web/js/popper.min.js',
        'web/js/bootstrap.min.js',
        'web/js/jquery.mCustomScrollbar.concat.min.js',
        'web/js/jquery.fancybox.js',
        'web/js/appear.js',
        'web/js/owl.js',
        'web/js/jquery-ui.js',
        'web/js/wow.js',
        'web/js/script.js',
        'web/js/color-settings.js',
        'web/js/jquery.bootstrap-touchspin.js',
        'web/js/jquery.countdown.js',
        'web/js/jquery.easing.min.js',
        'web/js/map-script.js',
        'web/js/respond.js',
        'web/js/validate.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
