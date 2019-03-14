<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
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
      'libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css',
      'libs/animate-css/animate.min.css',
      'font/font-awesome/css/font-awesome.min.css',
      'font/octicons/octicons.css',
      'font/fontello/css/fontello.css',
      'libs/pace/pace.css',
      'css/style.css',
      'css/style-responsive.css',
      'libs/jquery-ui-1.12.1.custom/jquery-ui.min.css'
    ];
    public $js = [
       'libs/jquery-slimscroll/jquery.slimscroll.min.js',
       'libs/bootstrap/js/bootstrap.min.js',
       'libs/jqueryui/jquery-ui-1.10.4.custom.min.js',
       'libs/fastclick/fastclick.js',
       'libs/jquery-sparkline/jquery-sparkline.js',
       'libs/pace/pace.min.js',
       'js/init.js',
       'js/main.js',
       'js/utility/utility.js',
       'libs/jquery-ui-1.12.1.custom/jquery-ui.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
