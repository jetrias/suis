<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Dialisis */

$currentAction = ($model->isNewRecord) ? Yii::t('app', 'Create') : Yii::t('app', 'Update');

$this->title = $currentAction . ' ' . Yii::t('app', 'Dialisis');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dialises'), 'url' => ['index']];

if (!$model->isNewRecord) {
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
}

$this->params['breadcrumbs'][] = $currentAction;
?>
<div class="dialisis-save-form">

    <?php $form = ActiveForm::begin(['options'=>['class'=>'needs-validation']]);// die(var_dump($form));?>


    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'cod_establecimiento_salud')->textInput(['maxlength' => true,'type'=>'hidden'])->label('') ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'establecimiento_de_salud')->textInput(['maxlength' => true,'type'=>'hidden'])->label('') ?>
        </div>
      </div>
      <fieldset class="border p-2">
         <legend  class="w-auto">Dialisis</legend>
         <div class="row">
           <div class="col-md-4">
             <?=  $form->field($model, 'puede_dializar')->dropDownList(
               ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION'] ); ?>
           </div>

           <div class="col-md-4">
               <?=  $form->field($model, 'posee_planta_electrica')->dropDownList(
                 ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION']); ?>
           </div>
           <div class="col-md-4">
               <?=  $form->field($model, 'esta_conectado_planta_electrica_del_hospital')->dropDownList(
                 ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION']); ?>
           </div>
           </div>
      </fieldset>



    <div class="row">
        <div class="col-md-4">
                <?=  $form->field($model, 'planta_electrica_operativa')->dropDownList(
                  ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION']); ?>

        </div>
        <div class="col-md-4">
            
            <?= $form->field($model, 'total_plantas_electricas_operativas')->textInput(['maxlength' => true,'class'=>'form-control']) ?>

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'total_plantas_electricas_inoperativas')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_aceite')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-4">
            <?=  $form->field($model, 'planta_electrica_cantidad_aceite_requerido')->dropDownList(
              ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION']); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_tipo_aceite_requerido')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?=  $form->field($model, 'planta_electrica_dissel')->dropDownList(
              ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION']); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_cantidad_dissel_requerido')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?=  $form->field($model, 'planta_electrica_bateria')->dropDownList(
              ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION']); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_cantidad_baterias_requeridas')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_nivel_dissel_restante')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?=  $form->field($model, 'planta_electrica_refrigerante_necesidad')->dropDownList(

              ['prompt'=>'Seleccione','SI' => 'SI', 'NO' => 'NO','SIN INFORMACION' => 'SIN INFORMACION']); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_nivel_refrigerante_restante')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_nivel_aceite_restante')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_tecnico_de_guardia')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'planta_electrica_telefono_tecnico_guardia')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'agua_disponible')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'capacidad_tanque')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'maquinas_operativas')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'maquinas_inoperativas')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'total_maquinas')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'pacientes_que_atiende')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'planta_de_osmosis')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'persona_responsable')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'observaciones')->textArea() ?>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
<?php
$js = <<<SCRIPT
/* To initialize BS3 tooltips set this below */
$(function () {
    $("[data-toggle='tooltip']").tooltip();
});;
/* To initialize BS3 popovers set this below */
$(function () {
    $("[data-toggle='popover']").popover();
});
SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);
?>
