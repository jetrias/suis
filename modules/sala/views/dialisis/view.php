<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Dialisis */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dialises'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dialisis-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cod_estado',
            'estado',
            'dependencia',
            'localizacion',
            'cod_establecimiento_salud',
            'establecimiento_de_salud',
            'puede_dializar',
            'posee_planta_electrica',
            'esta_conectado_planta_electrica_del_hospital',
            'planta_electrica_operativa',
            'total_plantas_electricas_operativas',
            'total_plantas_electricas_inoperativas',
            'planta_electrica_aceite',
            'planta_electrica_cantidad_aceite_requerido',
            'planta_electrica_tipo_aceite_requerido',
            'planta_electrica_dissel',
            'planta_electrica_cantidad_dissel_requerido',
            'planta_electrica_bateria',
            'planta_electrica_cantidad_baterias_requeridas',
            'planta_electrica_nivel_dissel_restante',
            'planta_electrica_refrigerante_necesidad',
            'planta_electrica_nivel_refrigerante_restante',
            'planta_electrica_nivel_aceite_restante',
            'planta_electrica_tecnico_de_guardia',
            'planta_electrica_telefono_tecnico_guardia',
            'agua_disponible',
            'capacidad_tanque',
            'maquinas_operativas',
            'maquinas_inoperativas',
            'total_maquinas',
            'pacientes_que_atiende',
            'planta_de_osmosis',
            'persona_responsable',
            'observaciones',
            'id_usuario',
            'fecha_inf',
            'fecha_sist',
            'hora_sist',
            'id',
        ],
    ]) ?>

</div>
