<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Establecimiento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Establecimientos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="establecimiento-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_padre',
            'codigo',
            'nombre',
            'direccion',
            'telefono',
            'descripcion:ntext',
            'longitud',
            'latitud',
            'rif',
            'funciona:boolean',
            'id_tipo_establecimiento',
            'codigo_estado',
            'codigo_municipio',
            'id_parroquia',
            'id_comunidad',
            'id_asic',
            'id_dependencia_admin',
            'eliminado:boolean',
            'id_anterior',
            'estatus',
        ],
    ]) ?>

</div>
