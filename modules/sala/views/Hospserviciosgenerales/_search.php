<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\HospserviciosgeneralesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hospserviciosgenerales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'cod_establecimiento_salud') ?>

    <?= $form->field($model, 'establecimiento_de_salud') ?>

    <?= $form->field($model, 'planta_electrica_operativa') ?>

    <?= $form->field($model, 'total_plantas_electricas_operativas') ?>

    <?= $form->field($model, 'total_plantas_electricas_inoperativas') ?>

    <?php // echo $form->field($model, 'planta_electrica_aceite') ?>

    <?php // echo $form->field($model, 'planta_electrica_cantidad_aceite_requerido') ?>

    <?php // echo $form->field($model, 'planta_electrica_tipo_aceite_requerido') ?>

    <?php // echo $form->field($model, 'planta_electrica_dissel') ?>

    <?php // echo $form->field($model, 'planta_electrica_cantidad_dissel_requerido') ?>

    <?php // echo $form->field($model, 'planta_electrica_bateria') ?>

    <?php // echo $form->field($model, 'planta_electrica_cantidad_baterias_requeridas') ?>

    <?php // echo $form->field($model, 'planta_electrica_nivel_dissel_restante') ?>

    <?php // echo $form->field($model, 'planta_electrica_refrigerante_necesidad') ?>

    <?php // echo $form->field($model, 'planta_electrica_nivel_refrigerante_restante') ?>

    <?php // echo $form->field($model, 'planta_electrica_nivel_aceite_restante') ?>

    <?php // echo $form->field($model, 'planta_electrica_tecnico_de_guardia') ?>

    <?php // echo $form->field($model, 'planta_electrica_telefono_tecnico_guardia') ?>

    <?php // echo $form->field($model, 'refrigeracion_de_alimentos') ?>

    <?php // echo $form->field($model, 'gases_medicinales_operativo') ?>

    <?php // echo $form->field($model, 'gases_medicinales_reservas') ?>

    <?php // echo $form->field($model, 'equipos_esterilizacion') ?>

    <?php // echo $form->field($model, 'desechos') ?>

    <?php // echo $form->field($model, 'observaciones_desechos') ?>

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
