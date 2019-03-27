<?php
use app\models\CatalogoComunidad;
use app\models\CatalogoEstablecimiento;
use app\models\CatalogoEstado;
use app\models\CatalogoMunicipio;
use app\models\CatalogoParroquia;
use app\models\CatalogoTipoEstablecimiento;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Establecimiento */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Establecimiento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Establecimientos'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="establecimiento-save-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'id_padre')->dropDownList(ArrayHelper::map(CatalogoEstablecimiento::find()->all(), 'id', 'id'), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'longitud')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'latitud')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'rif')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'funciona')->checkbox() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'id_tipo_establecimiento')->dropDownList(ArrayHelper::map(CatalogoTipoEstablecimiento::find()->all(), 'id', 'id'), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'codigo_estado')->dropDownList(ArrayHelper::map(CatalogoEstado::find()->all(), 'codigo_estado', 'codigo_estado'), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'codigo_municipio')->dropDownList(ArrayHelper::map(CatalogoMunicipio::find()->all(), 'codigo_municipio', 'codigo_municipio'), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'id_parroquia')->dropDownList(ArrayHelper::map(CatalogoParroquia::find()->all(), 'id_parroquia', 'id_parroquia'), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'id_comunidad')->dropDownList(ArrayHelper::map(CatalogoComunidad::find()->all(), 'id', 'id'), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'id_asic')->dropDownList(ArrayHelper::map(CatalogoEstablecimiento::find()->all(), 'id', 'id'), ['prompt' => '']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'id_dependencia_admin')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'eliminado')->checkbox() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'id_anterior')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'estatus')->textInput() ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
