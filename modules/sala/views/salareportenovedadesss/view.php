<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\sala\models\Salareportenovedadesss */
?>
<div class="salareportenovedadesss-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'estado',
            'nombre',
            'direccion',
            'telefono',
            'planta_electrica',
            'observaciones_planta_electrica:ntext',
            'agua',
            'observaciones_agua:ntext',
            'observaciones_generales:ntext',
            'estatus',
        ],
    ]) ?>

</div>
