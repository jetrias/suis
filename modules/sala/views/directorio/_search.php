<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\DirectorioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directorio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cod_establecimiento') ?>

    <?= $form->field($model, 'nombre_director') ?>

    <?= $form->field($model, 'telf_director') ?>

    <?= $form->field($model, 'nombre_agua') ?>

    <?php // echo $form->field($model, 'telf_agua') ?>

    <?php // echo $form->field($model, 'nombre_planta') ?>

    <?php // echo $form->field($model, 'telf_planta') ?>

    <?php // echo $form->field($model, 'telf_hosp') ?>

    <?php // echo $form->field($model, 'fecha_sist') ?>

    <?php // echo $form->field($model, 'hora_sist') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
