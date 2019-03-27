<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Novedades */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Novedades');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Novedades'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="novedades-save-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'planta_electrica')->dropDownList(
               ['prompt'=>'Seleccione','SI OPERATIVA' => 'SI OPERATIVA','SI INOPERATIVA' => 'SI INOPERATIVA', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION'] ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'observaciones_planta_electrica')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'agua')->dropDownList(
               ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION'] ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'observaciones_agua')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'observaciones_generales')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'defunciones')->dropDownList(
               ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION'] ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'causa_defuncion')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'estatus')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
