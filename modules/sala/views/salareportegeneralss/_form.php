<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Salareportegeneralss */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salareportegeneralss-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'puede_dializar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pe_d')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esta_conectado_planta_electrica_del_hospital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pe_diesel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dia_tot_pe_ope')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dia_tot_pe_ino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_aceite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_cantidad_aceite_requerido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_tipo_aceite_requerido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_dissel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_cantidad_dissel_requerido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_bateria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_cantidad_baterias_requeridas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_nivel_dissel_restante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_refrigerante_necesidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_nivel_refrigerante_restante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_nivel_aceite_restante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_tecnico_de_guardia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_electrica_telefono_tecnico_guardia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agua_disponible')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capacidad_tanque')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maquinas_operativas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maquinas_inoperativas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_maquinas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pacientes_que_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planta_de_osmosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'persona_responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_establecimiento_salud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'establecimiento_de_salud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agua_capacidad_total_lts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agua_porcentaje_de_llenado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agua_gasto_diario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agua_reservas_lts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agua_tanques_para_consumo_1500_lts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agua_por_tuberia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones_agua')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total_ambulancias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ambulancias_de_apoyo_con')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ambulancias_con_soporte_vital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones_ambulancias')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'camas_operativas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pacientes_criticos_adultos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pacientes_criticos_ninos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uti_neonatal_pacientes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utineonatal_cupos_disponibles')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uti_camas_operativas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uti_camas_disponibles')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quirofanos_emergencias_operativos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quirofanos_emergencias_inoperativos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equipo_de_guardia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_muertes_maternas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detalle_muerte_materna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_hemoderivados')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'servicio_hemoderivados_operativos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones_movimiento')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pe_ser_gen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_total_pe_op')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_tot_pe_ino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '_ser_gen_pe_ace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_can_ace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_pe_tip_ace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_diesel_pe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_diesel_re_pe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_pe_bat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_pe_bat_req')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_pe_di_res')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_pe_ref_nec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_ref_res')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_race_res')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_tec_pe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser_gen_tec_tlf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refrigeracion_de_alimentos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gases_medicinales_operativo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gases_medicinales_reservas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equipos_esterilizacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desechos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones_desechos')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'observaciones_serv_gen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
