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
        'css/style.css',
        'css/style2.css',
    ];
    public $js = [
        'js/jquery.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js',
        'https://aframe.io/releases/0.8.0/aframe.min.js',
        'js/main.js',
        'js/jquery-jquery.min.js',
        'js/dist-page-redesign-agriculture.js',
        'js/main-footer.js',
        'js/main-script.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
