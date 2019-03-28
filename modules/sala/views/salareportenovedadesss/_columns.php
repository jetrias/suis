<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'codigo',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'estado',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nombre',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'direccion',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'telefono',
    ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'planta_electrica',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'observaciones_planta_electrica',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'agua',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'observaciones_agua',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'observaciones_generales',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'estatus',
     ],
        [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false, for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   