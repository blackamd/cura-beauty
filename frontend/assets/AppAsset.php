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
        'web/css/vendor.css',
        'web/css/demo.css',
        'web/css/styles.css',
    ];
    public $js = [
        'web/js/plugins.js',
//        'web/js/particle-settings.js',
//        'web/js/particles.min.js',
        'web/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
