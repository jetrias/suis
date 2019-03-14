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
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h2>Sistema Unico Integrado de Salud</h2>
    </div>
    <div class = "row" style="margin-top: 20%;">
   <div class = "col-sm-6 col-md-3">
      <a href ="http://127.0.0.1/suis_nvo/web/index.php/site/login" class = "thumbnail">
         <img src = "img/logo_bebe.png" alt = "Ev-25" class="thumbnails" style="height: 165px; width: 160px;">
         <div class="caption">
          <h3 class="h31" style="margin-bottom: 20px;"><b>Ev-25</b></h3>
          <p>
              Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
   <div class = "col-sm-6 col-md-3">
      <a href = "#" class = "thumbnail">
         <img src = "img/establecimientoss.jpg" alt ="Establecimientos" class="thumbnails" style="height:180px;width: 180px;">
         <div class="caption">
          <h3 style="margin-bottom: 20px;"><b>Establecimientos</b></h3>
          <p>
             Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
   <div class = "col-sm-6 col-md-3">
      <a href = "#" class = "thumbnail">
         <img src ="img/cambioss.jpg" alt = "Establecimientos" class="thumbnails" style="height:140px;width: 110px;">
         <div class="caption">
          <h3 style="margin-bottom: 30px;"><b>Cambios de Establecimientos</b></h3>
          <p>
              Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
   <div class = "col-sm-6 col-md-3">
      <a href = "#" class = "thumbnail">
         <img src = "img/documentoss.jpg" alt = "Generic placeholder thumbnail" class="thumbnails" style="height:162px;width: 130px;">
         <div class="caption">
          <h3><b>Documento Sis02-Epi10</b></h3>
          <p>
             Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
</div>
<!------------------------------------------------------------------------------------------------------>
<div class = "row">
   <div class = "col-sm-6 col-md-3">
      <a href = "#" class = "thumbnail">
         <img src = "img/pacientes.jpg" alt = "Generic placeholder thumbnail" class="thumbnails" style="height:162px;width: 130px;">
         <div class="caption">
          <h3><b>Paciente</b></h3>
          <p>
             Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
   <div class = "col-sm-6 col-md-3">
      <a href = "#" class = "thumbnail">
         <img src = "img/areaa.jpg" alt = "Generic placeholder thumbnail" class="thumbnails" style="height:162px;width: 200px;">
         <div class="caption">
          <h3><b>Áreas</b></h3>
          <p>
             Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
   
   <div class = "col-sm-6 col-md-3">
      <a href = "#" class = "thumbnail">
         <img src = "img/grupos.jpg" alt = "Generic placeholder thumbnail" class="thumbnails" style="height:162px;width: 200px;" >
         <div class="caption">
          <h3><b>Grupos</b> (Permisos)</h3>
          <p>
              Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
   
   <div class = "col-sm-6 col-md-3">
      <a href = "#" class = "thumbnail">
         <img src = "img/usuarioo.jpg" alt = "Generic placeholder thumbnail" class="thumbnails" style="height:162px;width: 200px;" >
         <div class="caption">
          <h3><b>Usuarios</b></h3>
          <p>
              Sistema encargado de generar 
              los Certificados Electrónicos
              de nacimiento a nivel nacional.
          </p>
         </div>
      </a>
   </div>
   
</div>
