<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospserviciosgenerales */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Hospserviciosgenerales');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospserviciosgenerales'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="hospserviciosgenerales-save-form">

    <?php $form = ActiveForm::begin(); ?>


     <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'fecha_inf')->textInput(['maxlength' => true, 'type'=>'date']) ?>
        </div>
  
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_operativa')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'total_plantas_electricas_operativas')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'total_plantas_electricas_inoperativas')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_aceite')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_cantidad_aceite_requerido')->textInput(['maxlength' => true, 'type'=>'number']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_tipo_aceite_requerido')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_dissel')->textInput(['maxlength' => true]) ?>
        </div>
   
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_cantidad_dissel_requerido')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_bateria')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_cantidad_baterias_requeridas')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_nivel_dissel_restante')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_refrigerante_necesidad')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_nivel_refrigerante_restante')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_nivel_aceite_restante')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_tecnico_de_guardia')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_telefono_tecnico_guardia')->textInput(['maxlength' => true]) ?>
        </div>
   
        <div class="col-md-4">
            <?= $form->field($model, 'refrigeracion_de_alimentos')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'gases_medicinales_operativo')->textInput(['maxlength' => true]) ?>
        </div>
   
        <div class="col-md-4">
            <?= $form->field($model, 'gases_medicinales_reservas')->textInput(['maxlength' => true]) ?>
        </div>
   
        <div class="col-md-4">
            <?= $form->field($model, 'equipos_esterilizacion')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'desechos')->textInput(['maxlength' => true]) ?>
        </div>
   
        <div class="col-md-4">
            <?= $form->field($model, 'observaciones_desechos')->textarea(['rows' => 6]) ?>
        </div>
    
        <div class="col-md-12">
            <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
        </div>
    </div>

   
    <?php ActiveForm::end(); ?>

</div>
