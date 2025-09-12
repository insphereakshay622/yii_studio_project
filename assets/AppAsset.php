<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        // --- animate library ---
        'lib/animate/animate.min.css',
        'lib/owlcarousel/assets/owl.carousel.min.css',

        'css/style.css',
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'lib/wow/wow.min.js',
        'lib/easing/easing.min.js',
        'lib/waypoints/waypoints.min.js',
        'lib/owlcarousel/owl.carousel.min.js',
        'js/main.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];

    public function init()
    {
        parent::init();
        
        $this->js[] = 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js';
        $this->js[] = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js';
    }

    

}
