<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Salamonitoreopdm */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Salamonitoreopdm');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Salamonitoreopdms'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="salamonitoreopdm-save-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'estatus_llamada')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'ulcera')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'grado_ulcera')->textInput() ?>
        </div>
    </div>
<div class="panel panel-default">
<div class="panel-heading">Datos Brigadista</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'cod_nacionalidad_brigadista')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'cedula_brigadista')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'pnombre_brigadista')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-4">
                <?= $form->field($model, 'snombre_brigadista')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'papellido_brigadista')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'sapellido_brigadista')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'telefono_brigadista')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
<div class="panel-heading">Datos Estudiante UCS</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'cod_nacionalidad_est_ucs')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'cedula_est_ucs')->textInput() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'pnombre_est_ucs')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'snombre_est_ucs')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'papellido_est_ucs')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'sapellido_est_ucs')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'telefono_est_ucs')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
<div class="panel-heading">Datos Rehabilitación</div>
  <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'fecha_ultima_rehabilitacion')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'fecha_proxima_rehabilitacion')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'verificada_rehabilitacion')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'evolucion')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
