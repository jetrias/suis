<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Novedades */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Novedades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="novedades-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cod_establecimiento_salud',
            'planta_electrica',
            'observaciones_planta_electrica:ntext',
            'agua',
            'observaciones_agua:ntext',
            'observaciones_generales:ntext',
            'defunciones',
            'causa_defuncion',
            'estatus',
            'fecha_sist',
            'hora_sit',
            'id_usuario',
        ],
    ]) ?>

</div>
