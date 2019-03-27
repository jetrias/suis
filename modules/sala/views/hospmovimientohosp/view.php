<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospmovimientohosp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospmovimientohosps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hospmovimientohosp-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'establecimiento_de_salud',
            'cod_establecimiento_salud',
            'camas_operativas',
            'pacientes_criticos_adultos',
            'pacientes_criticos_ninos',
            'uti_neonatal_pacientes',
            'utineonatal_cupos_disponibles',
            'uti_camas_operativas',
            'uti_camas_disponibles',
            'quirofanos_emergencias_operativos',
            'quirofanos_emergencias_inoperativos',
            'equipo_de_guardia',
            'total_muertes_maternas',
            'detalle_muerte_materna',
            'servicio_hemoderivados',
            'servicio_hemoderivados_operativos',
            'observaciones:ntext',
            'id_usuario',
            'fecha_inf',
            'fecha_sist',
            'hora_sist',
            'id',
        ],
    ]) ?>

</div>
