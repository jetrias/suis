<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Hospambulancias */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hospambulancias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hospambulancias-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cod_establecimiento_salud',
            'establecimiento_de_salud',
            'total_ambulancias',
            'ambulancias_de_apoyo_con',
            'ambulancias_con_soporte_vital',
            'observaciones:ntext',
            'id_usuario',
            'fecha_inf',
            'fecha_sist',
            'hora_sist',
            'id',
        ],
    ]) ?>

</div>
