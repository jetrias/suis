<?php
use app\models\CatalogoComunidad;
use app\models\CatalogoEstablecimiento;
use app\models\CatalogoEstado;
use app\models\CatalogoMunicipio;
use app\models\CatalogoParroquia;
use app\models\CatalogoTipoEstablecimiento;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Establecimiento */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Establecimiento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Establecimientos'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="establecimiento-save-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
