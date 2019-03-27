<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospagua */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Hospagua');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospaguas'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="hospagua-save-form">

    <?php $form = ActiveForm::begin(); ?>


<div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'fecha_inf')->textInput(['maxlength' => true, 'type'=>'date']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'agua_capacidad_total_lts')->textInput(['maxlength' => true]) ?>
        </div>
    <div class="col-md-4">
            <?= $form->field($model, 'agua_porcentaje_de_llenado')->textInput(['maxlength' => true]) ?>
        </div>
</div>
<div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'agua_gasto_diario')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'agua_reservas_lts')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'agua_tanques_para_consumo_1500_lts')->textInput(['maxlength' => true]) ?>
        </div>
</div>
<div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'agua_por_tuberia')->textInput(['maxlength' => true]) ?>
        </div>
        
</div>
<div class="col-md-42">
            <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
</div>
    <?php ActiveForm::end(); ?>

</div>
