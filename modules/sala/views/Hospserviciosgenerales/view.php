<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospserviciosgenerales */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospserviciosgenerales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hospserviciosgenerales-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cod_establecimiento_salud',
            'establecimiento_de_salud',
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
            'refrigeracion_de_alimentos',
            'gases_medicinales_operativo',
            'gases_medicinales_reservas',
            'equipos_esterilizacion',
            'desechos',
            'observaciones_desechos:ntext',
            'observaciones:ntext',
            'id_usuario',
            'fecha_inf',
            'fecha_sist',
            'hora_sist',
            'id',
        ],
    ]) ?>

</div>
