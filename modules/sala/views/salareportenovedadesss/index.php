<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\sala\models\SalareportenovedadesssSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reporte de Novedades';
$this->params['breadcrumbs'][] = ['label' => 'Establecimiento', 'url' => ['/sala/establecimiento']];
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<p>
     <?= Html::a(Yii::t('app', 'regresar'), ['/sala/establecimiento '], [
        'class' => 'btn btn-success',
        'data-title' => Yii::t('app', 'regresar')
    ]) ?>
</p>
<div class="salareportenovedadesss-index">
    <div id="ajaxCrudDatatable">
    <?php
    echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' =>require(__DIR__.'/_columns.php'),
    'exportConfig' => [
        ExportMenu::FORMAT_EXCEL => true,
        ExportMenu::FORMAT_TEXT => false,
        ExportMenu::FORMAT_HTML => false,
        ExportMenu::FORMAT_PDF => false,
        ExportMenu::FORMAT_CSV => false,
    ],
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-secondary'
    ]
    ]) . "<hr>\n".GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
                ['content'=>
                   /* Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Create new Salareportenovedadessses','class'=>'btn btn-default']).*/
                   Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                   ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']),//.
                    //'{toggleData}'.
                    //'{export}'
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> Listado de Novedades',
               /* 'before'=>'<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                'after'=>BulkButtonWidget::widget([
                            'buttons'=>Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All',
                                ["bulk-delete"] ,
                                [
                                    "class"=>"btn btn-danger btn-xs",
                                    'role'=>'modal-remote-bulk',
                                    'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                                    'data-request-method'=>'post',
                                    'data-confirm-title'=>'Are you sure?',
                                    'data-confirm-message'=>'Are you sure want to delete this item'
                                ]),
                        ]).                        
                        '<div class="clearfix"></div>',*/
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
