<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\EstablecimientoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="establecimiento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_padre') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'longitud') ?>

    <?php // echo $form->field($model, 'latitud') ?>

    <?php // echo $form->field($model, 'rif') ?>

    <?php // echo $form->field($model, 'funciona')->checkbox() ?>

    <?php // echo $form->field($model, 'id_tipo_establecimiento') ?>

    <?php // echo $form->field($model, 'codigo_estado') ?>

    <?php // echo $form->field($model, 'codigo_municipio') ?>

    <?php // echo $form->field($model, 'id_parroquia') ?>

    <?php // echo $form->field($model, 'id_comunidad') ?>

    <?php // echo $form->field($model, 'id_asic') ?>

    <?php // echo $form->field($model, 'id_dependencia_admin') ?>

    <?php // echo $form->field($model, 'eliminado')->checkbox() ?>

    <?php // echo $form->field($model, 'id_anterior') ?>

    <?php // echo $form->field($model, 'estatus') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
