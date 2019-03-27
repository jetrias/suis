<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospambulancias */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Hospambulancias');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospambulancias'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="hospambulancias-save-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
         <div class="col-md-4">
                <?= $form->field($model, 'fecha_inf')->textInput(['maxlength' => true, 'type'=>'date']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'total_ambulancias')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'ambulancias_de_apoyo_con')->textInput(['maxlength' => true]) ?>
        </div>
   
    </div>
    <div class="row">
        <div class="col-md-4">
                <?= $form->field($model, 'ambulancias_con_soporte_vital')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
    </div>


   

    <?php ActiveForm::end(); ?>

</div>
