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
        'mdb-css/bootstrap.min.css',
        'mdb-css/mdb.min.css',
        'mdb-css/style.css',
        'css/style.css',
        'css/site.css',
        
    ];
    public $js = [
        'mdb-js/jquery-3.4.1.min.js',
        'mdb-js/popper.min.js',
        'mdb-js/bootstrap.min.js',
        'mdb-js/mdb.min.js',
        'js/js.js',
        
        
        'js/TweenMax.min.js',
        'js/MorphSVGPlugin.min.js',
        'js/findShapeIndex.js',
        'js/c58fffe58d661ae3d4b168a43eb3b2b8.js',
        'js/emoji.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
