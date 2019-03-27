<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\NovedadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="novedades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cod_establecimiento_salud') ?>

    <?= $form->field($model, 'planta_electrica') ?>

    <?= $form->field($model, 'observaciones_planta_electrica') ?>

    <?= $form->field($model, 'agua') ?>

    <?php // echo $form->field($model, 'observaciones_agua') ?>

    <?php // echo $form->field($model, 'observaciones_generales') ?>

    <?php // echo $form->field($model, 'defunciones') ?>

    <?php // echo $form->field($model, 'causa_defuncion') ?>

    <?php // echo $form->field($model, 'estatus') ?>

    <?php // echo $form->field($model, 'fecha_sist') ?>

    <?php // echo $form->field($model, 'hora_sit') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
