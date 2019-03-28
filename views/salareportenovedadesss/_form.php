<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Salareportenovedadesss */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salareportenovedadesss-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones_planta_electrica')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'agua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones_agua')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'observaciones_generales')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estatus')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
