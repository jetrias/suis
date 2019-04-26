<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Saladpdm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Saladpdms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="saladpdm-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'apellidos',
            'edad',
            'sexo',
            'telefono',
            'estado',
            'municipio',
            'parroquia',
            'direccion',
            'discapacidad',
            'tipo_discapacidad',
            'fecha_sist',
            'horas_sist',
            'id_usuario',
        ],
    ]) ?>

</div>
