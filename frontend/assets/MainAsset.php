<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Login page asset bundle for Nexgen theme based on Bootstrap 3
 */
class MainAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/nexgen/assets';

    public $css = [
        'css/vendor/bootstrap.min.css',
        'css/vendor/slider.min.css',
        'css/main.css',
        'css/vendor/icons.min.css',
        'css/vendor/icons-fa.min.css',
        'css/vendor/animation.min.css',
        'css/vendor/gallery.min.css',
        'css/vendor/cookie-notice.min.css',
        'css/default.css'
    ];

    public $js = [
        'js/vendor/jquery.min.js',
        'js/vendor/jquery.easing.min.js',
        'js/vendor/jquery.inview.min.js',
        'js/vendor/popper.min.js',
        'js/vendor/bootstrap.min.js',
        'js/vendor/ponyfill.min.js',
        'js/vendor/slider.min.js',
        'js/vendor/animation.min.js',
        'js/vendor/progress-radial.min.js',
        'js/vendor/bricklayer.min.js',
        'js/vendor/gallery.min.js',
        'js/vendor/shuffle.min.js',
        'js/vendor/particles.min.js',
        'js/main.js',
    ];
}
