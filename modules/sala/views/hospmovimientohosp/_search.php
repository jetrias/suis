<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\HospmovimientohospSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hospmovimientohosp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'establecimiento_de_salud') ?>

    <?= $form->field($model, 'cod_establecimiento_salud') ?>

    <?= $form->field($model, 'camas_operativas') ?>

    <?= $form->field($model, 'pacientes_criticos_adultos') ?>

    <?php // echo $form->field($model, 'pacientes_criticos_ninos') ?>

    <?php // echo $form->field($model, 'uti_neonatal_pacientes') ?>

    <?php // echo $form->field($model, 'utineonatal_cupos_disponibles') ?>

    <?php // echo $form->field($model, 'uti_camas_operativas') ?>

    <?php // echo $form->field($model, 'uti_camas_disponibles') ?>

    <?php // echo $form->field($model, 'quirofanos_emergencias_operativos') ?>

    <?php // echo $form->field($model, 'quirofanos_emergencias_inoperativos') ?>

    <?php // echo $form->field($model, 'equipo_de_guardia') ?>

    <?php // echo $form->field($model, 'total_muertes_maternas') ?>

    <?php // echo $form->field($model, 'detalle_muerte_materna') ?>

    <?php // echo $form->field($model, 'servicio_hemoderivados') ?>

    <?php // echo $form->field($model, 'servicio_hemoderivados_operativos') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha_inf') ?>

    <?php // echo $form->field($model, 'fecha_sist') ?>

    <?php // echo $form->field($model, 'hora_sist') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
