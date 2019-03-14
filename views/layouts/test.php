<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use mdm\admin\components\MenuHelper;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web') ?>/css/metro.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web') ?>/css/metro_mobile.css" media="screen and (max-height: 400px), screen and (orientation:portrait)">
    <script type="text/javascript" src="<?= Yii::getAlias('@web') ?>/js/metro.js"></script>
    <!-- Computed in PHP based on your settings -->
    <style>
        #widget_scroll_container {
            width: 2160px;
        }
        div.widget_container {
            width: 1200px;
        }
        div.widget_container.half {
            width: 400px;
        }
        @media screen and (max-height: 680px) {
            #widget_scroll_container {
                width: 1660px;
            }
            div.widget_container {
                width: 900px;
            }
            div.widget_container.half {
                width: 300px;
            }
        }
    </style>
</head>
  <body class="loaded">
<?php $this->beginBody()

 ?>
 <header class="navbar navbar-fixed-top">
    <div class="topbar">
        <div class="topbar-left">
            <div class="logo">
                <h1><?php echo Html::a
                    ('<img src="'.Yii::getAlias('@web') . '/img/logos/Suis1.png">',
                    ['/site/index']);
                ?></h1>
            </div>

        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation" id="content-nav">
            <div class="container">
	    
                <div class="navbar-collapse2">




                    <ul class="nav navbar-nav navbar-right">
			<li>
|			<?php echo Html::a ('<i class="fa fa-power-off text-white-1 logout"></i>',
                        	['/site/logout'],
                        ['title'=>'Cerrar Sesión']); ?>
			</li>		    
                        <li class="hidden-xs">
                            <img src="<?= Yii::$app->request->baseUrl; ?>/img/logos/banner.png" alt="Logo">
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
 </header>

  <div><?= $content ?></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
