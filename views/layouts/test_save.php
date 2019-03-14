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
</head>
<body>
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
            <button id="but" class="button-menu-mobile open-left">
            <i class="glyphicon glyphicon-menu-hamburger"></i></button>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation" id="content-nav">
            <div class="container">
                <div class="navbar-collapse2">
                    <ul class="nav navbar-nav navbar-right">
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



 <div class = "row" style="margin-top: 2%; margin-left: 5px; margin-right: 5px;">

 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px; opacity: 0.5;cursor: none;border:none;" href = "#" class = "thumbnail">
     <img src ="<?= Yii::getAlias('@web')?>/img/varios_transparencia.png" alt = "Establecimientos" class="thumbnails" style="height:100px;width: 100px;">
     <div class="caption">
      <h3 style="margin-left: 50px;"><b>Morbilidad</b></h3>
      <p>
          Sistema encargado de generar
          los Certificados Electrónicos
          de nacimiento a nivel nacional.
      </p>
     </div>
  </a>
 </div>
<?= \Yii::$app->user->can('/ev25/certificado/index')?>
<?php if (\Yii::$app->user->can('/ev25/certificado/index')): ?>
 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px;" href = "<?= Yii::$app->urlManager->createUrl(['/ev25/certificado/index'])?>" class = "thumbnail">
     <img src = "<?= Yii::getAlias('@web')?>/img/logo_bebe1.png" alt = "Ev-25" class="thumbnails" style="height: 100px; width: 100px;">
     <div class="caption">
      <h3 class="h31" style="margin-bottom: 40px;margin-left: 50px;"><b>Natalidad</b></h3>
      <p>
          Sistema encargado de generar
          los Certificados Electrónicos
          de nacimiento a nivel nacional.
      </p>
     </div>
  </a>
 </div>
<?php else: ?>
  <div class = "col-md-3">
   <a style="min-height: 275px; max-height: 275px;opacity: 0.5;cursor: none;border:none;" href = "#" class = "thumbnail">
      <img src = "<?= Yii::getAlias('@web')?>/img/logo_bebe1.png" alt = "Ev-25" class="thumbnails" style="height: 100px; width: 100px;">
      <div class="caption">
       <h3 class="h31" style="margin-bottom: 40px;margin-left: 50px;"><b>Natalidad</b></h3>
       <p>
           Sistema encargado de generar
           los Certificados Electrónicos
           de nacimiento a nivel nacional.
       </p>
      </div>
   </a>
  </div>
<?php endif; ?>
 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px;border:" href = "<?= Yii::$app->urlManager->createUrl(['/sicasmi/embarazadas/inicio'])?>" class = "thumbnail">
    <img src = "<?= Yii::getAlias('@web')?>/img/sicasmi2.png" alt ="Establecimientos" class="thumbnails" style="height:100px;width: 100px;">
       <div class="caption">
        <h3 style="margin-bottom: 40px;margin-left: 50px;"><b>SICASMI</b></h3>
        <p>
           Sistema encargado de realizar
           el registro de las mujeres embarazadas
           para su control.
        </p>
     </div>
  </a>
 </div>


 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px;opacity: 0.5;cursor: none;border: none;" href = "#" class = "thumbnail">
     <img src = "<?= Yii::getAlias('@web')?>/img/documentoss.png" alt = "Generic placeholder thumbnail" class="thumbnails" style="height:100px;width: 100px;">
     <div class="caption">
      <h3><b>Mortalidad</b></h3>
      <p>
         Sistema encargado de generar
          los Certificados Electrónicos
          de nacimiento a nivel nacional.
      </p>
     </div>
  </a>
 </div>

 </div>

 <div class = "row" style="margin-left: 5px; margin-right: 5px;">

 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px;opacity: 0.5;cursor: none; border: none;" href = "#" class = "thumbnail">
     <img src ="<?= Yii::getAlias('@web')?>/img/cambioss.png" alt = "Establecimientos" class="thumbnails" style="height:100px;width: 100px;">
     <div class="caption">
      <h3><b>Inmunizaciones</b></h3>
      <p>
          Sistema encargado de generar
          los Certificados Electrónicos
          de nacimiento a nivel nacional.
      </p>
     </div>
  </a>
 </div>

 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px;opacity: 0.5;cursor: none;border: none;" href = "#" class = "thumbnail">
     <img src = "<?= Yii::getAlias('@web')?>/img/logo_bebe.png" alt = "Ev-25" class="thumbnails" style="height: 100px; width: 100px;">
     <div class="caption">
      <h3 class="h31"><b>Fichas Epidemiologicas</b></h3>
      <p>
          Sistema encargado de generar
          los Certificados Electrónicos
          de nacimiento a nivel nacional.
      </p>
     </div>
  </a>
 </div>

 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px;opacity: 0.5;cursor: none;border: none;" href = "#" class = "thumbnail">
    <img src = "<?= Yii::getAlias('@web')?>/img/bisturi.png" alt ="Establecimientos" class="thumbnails" style="height:100px;width: 100px;">
       <div class="caption">
        <h3 style="margin-bottom: 40px;"><b>Cirugía</b></h3>
        <p>
           Sistema encargado de realizar
           el registro de las mujeres embarazadas
           para su control.
        </p>
     </div>
  </a>
 </div>


 <div class = "col-md-3">
  <a style="min-height: 275px; max-height: 275px;opacity: 0.5;cursor: none;border: none;" href = "#" class = "thumbnail">
     <img src = "<?= Yii::getAlias('@web')?>/img/oncologia.png" alt = "Generic placeholder thumbnail" class="thumbnails" style="height:100px;width: 100px;">
     <div class="caption">
      <h3><b>Oncológia</b></h3>
      <p>
         Sistema encargado de generar
          los Certificados Electrónicos
          de nacimiento a nivel nacional.
      </p>
     </div>
  </a>
 </div>
 </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
