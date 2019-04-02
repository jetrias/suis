<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Directorio */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Directorio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Directorios'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="directorio-save-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'nombre_director')->textInput(['maxlength' => true])->label('Nombre Director') ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'telf_director')->textInput(['maxlength' => true])->label('Teléfono Director Hospital') ?>
        </div>
    
        <div class="col-md-8">
            <?= $form->field($model, 'nombre_agua')->textInput(['maxlength' => true])->label('Nombre Encargado de Aguas') ?>
        </div>
   
        <div class="col-md-4">
            <?= $form->field($model, 'telf_agua')->textInput(['maxlength' => true]) -> label('Telefono encargado de agua')?>
        </div>
    
        <div class="col-md-8">
            <?= $form->field($model, 'nombre_planta')->textInput(['maxlength' => true]) -> label ('Nombre encargado de la planta') ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'telf_planta')->textInput(['maxlength' => true]) -> label ('Telefono encargado de la planta') ?>
        </div>
   
        <div class="col-md-4">
            <?= $form->field($model, 'telf_hosp')->textInput(['maxlength' => true]) -> label ('Telefono del hospital')?>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
