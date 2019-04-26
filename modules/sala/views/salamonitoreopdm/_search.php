<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\SalamonitoreopdmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salamonitoreopdm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'estatus_llamada') ?>

    <?= $form->field($model, 'ulcera') ?>

    <?= $form->field($model, 'grado_ulcera') ?>

    <?= $form->field($model, 'cod_nacionalidad_brigadista') ?>

    <?php // echo $form->field($model, 'cedula_brigadista') ?>

    <?php // echo $form->field($model, 'pnombre_brigadista') ?>

    <?php // echo $form->field($model, 'snombre_brigadista') ?>

    <?php // echo $form->field($model, 'papellido_brigadista') ?>

    <?php // echo $form->field($model, 'sapellido_brigadista') ?>

    <?php // echo $form->field($model, 'telefono_brigadista') ?>

    <?php // echo $form->field($model, 'cod_nacionalidad_est_ucs') ?>

    <?php // echo $form->field($model, 'cedula_est_ucs') ?>

    <?php // echo $form->field($model, 'pnombre_est_ucs') ?>

    <?php // echo $form->field($model, 'snombre_est_ucs') ?>

    <?php // echo $form->field($model, 'papellido_est_ucs') ?>

    <?php // echo $form->field($model, 'sapellido_est_ucs') ?>

    <?php // echo $form->field($model, 'telefono_est_ucs') ?>

    <?php // echo $form->field($model, 'fecha_ultima_rehabilitacion') ?>

    <?php // echo $form->field($model, 'fecha_proxima_rehabilitacion') ?>

    <?php // echo $form->field($model, 'verificada_rehabilitacion') ?>

    <?php // echo $form->field($model, 'evolucion') ?>

    <?php // echo $form->field($model, 'fecha_inf') ?>

    <?php // echo $form->field($model, 'hora_inf') ?>

    <?php // echo $form->field($model, 'fecha_sist') ?>

    <?php // echo $form->field($model, 'horas_sist') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
