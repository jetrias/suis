<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospagua */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospaguas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hospagua-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cod_establecimiento_salud',
            'establecimiento_de_salud',
            'agua_capacidad_total_lts',
            'agua_porcentaje_de_llenado',
            'agua_gasto_diario',
            'agua_reservas_lts',
            'agua_tanques_para_consumo_1500_lts',
            'agua_por_tuberia',
            'observaciones:ntext',
            'id_usuario',
            'fecha_inf',
            'fecha_sist',
            'hora_sist',
            'id',
        ],
    ]) ?>

</div>
