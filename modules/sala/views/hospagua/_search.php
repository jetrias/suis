<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\HospaguaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hospagua-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'cod_establecimiento_salud') ?>

    <?= $form->field($model, 'establecimiento_de_salud') ?>

    <?= $form->field($model, 'agua_capacidad_total_lts') ?>

    <?= $form->field($model, 'agua_porcentaje_de_llenado') ?>

    <?= $form->field($model, 'agua_gasto_diario') ?>

    <?php // echo $form->field($model, 'agua_reservas_lts') ?>

    <?php // echo $form->field($model, 'agua_tanques_para_consumo_1500_lts') ?>

    <?php // echo $form->field($model, 'agua_por_tuberia') ?>

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
