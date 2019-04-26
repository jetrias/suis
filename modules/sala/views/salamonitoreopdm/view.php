<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Salamonitoreopdm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Salamonitoreopdms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="salamonitoreopdm-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'estatus_llamada',
            'ulcera',
            'grado_ulcera',
            'cod_nacionalidad_brigadista',
            'cedula_brigadista',
            'pnombre_brigadista',
            'snombre_brigadista',
            'papellido_brigadista',
            'sapellido_brigadista',
            'telefono_brigadista',
            'cod_nacionalidad_est_ucs',
            'cedula_est_ucs',
            'pnombre_est_ucs',
            'snombre_est_ucs',
            'papellido_est_ucs',
            'sapellido_est_ucs',
            'telefono_est_ucs',
            'fecha_ultima_rehabilitacion',
            'fecha_proxima_rehabilitacion',
            'verificada_rehabilitacion',
            'evolucion',
            'fecha_inf',
            'hora_inf',
            'fecha_sist',
            'horas_sist',
            'id_usuario',
        ],
    ]) ?>

</div>
