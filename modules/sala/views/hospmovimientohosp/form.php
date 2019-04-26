<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\sala\models\Catcausasquiinoperativo;
/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospmovimientohosp */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Hospmovimientohosp');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospmovimientohosps'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="hospmovimientohosp-save-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'fecha_inf')->textInput(['maxlength' => true, 'class'=>'date']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'camas_operativas')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'pacientes_criticos_adultos')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'pacientes_criticos_ninos')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'uti_neonatal_pacientes')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'utineonatal_cupos_disponibles')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'uti_camas_operativas')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'uti_camas_disponibles')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'quirofanos_emergencias_operativos')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'quirofanos_emergencias_inoperativos')->textInput(['maxlength' => true,'onchange'=>'qui_inoperativo($(this).find("option:selected").text());']) ?>
        </div>
        <div id="causas-ino" class="col-md-4">
            <?php
                //DropDownList para causas inoperatividad
                echo $form->field($model, 'motivo_quirofano_inoperativo')->dropDownList(
                ArrayHelper::map(Catcausasquiinoperativo::find()->all(),'descripcion','descripcion'),
                [
                 'required'=>'true',
                 'id'=>'drop_causas_ino',
                 'label'=>"Causas Inoperatividad",
                 'prompt'=>'Seleccione...',
                 //'required'=>'true',
                 //'onchange' =>    
                ])->label('Causas Inoperatividad');
            ?> 
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'equipo_de_guardia')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'total_muertes_maternas')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'detalle_muerte_materna')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'servicio_hemoderivados')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'servicio_hemoderivados_operativos')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
