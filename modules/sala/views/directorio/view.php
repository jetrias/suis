<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Directorio */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Directorios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="directorio-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cod_establecimiento',
            'nombre_director',
            'telf_director',
            'nombre_agua',
            'telf_agua',
            'nombre_planta',
            'telf_planta',
            'telf_hosp',
            'fecha_sist',
            'hora_sist',
            'id_usuario',
        ],
    ]) ?>

</div>
