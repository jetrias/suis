<?php
use app\models\Comunidad;
use app\models\Establecimiento;
use app\models\Estado;
use app\models\Municipio;
use app\models\Parroquia;
use app\models\TipoEstablecimiento;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\sala\models\EstablecimientoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Establecimiento');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widget">
    <div class="widget-header transparent">
        <h2><strong><?= Html::encode($this->title) ?></strong></h2>
        <div class="additional-btn">
            <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
            <a href="#" class="widget-toggle hidden"><i class="icon-down-open-2"></i></a>
        </div>
    </div>

    <div class="widget-content padding">
        <?php Pjax::begin(['id' => 'establecimiento-grid-pjax']); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],


          /*  [
                'attribute' => 'id_padre',
                'filter' => ArrayHelper::map(Establecimiento::find()->all(), 'id', 'id'),
                'value' => function ($model) {
                    return $model->id_padre;
                },
            ],*/
            //'codigo',
            'nombre',
            'direccion',
            [
                'attribute' => 'codigo_estado',
                'filter' => ArrayHelper::map(Estado::find()->all(), 'codigo_estado', 'estado'),
                'value' => function ($model) {
                    return $model->codigoEstado->estado;
                },
            ],
                //'telefono',
                //'descripcion:ntext',
                //'longitud',
                //'latitud',
                //'rif',
                //'funciona:boolean',
                //'id_tipo_establecimiento',
                //'codigo_municipio',
                //'id_parroquia',
                //'id_comunidad',
                //'id_asic',
                //'id_dependencia_admin',
                //'eliminado:boolean',
                //'id_anterior',
                //'estatus',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'urlCreator' => function($action, $model, $key, $index, $actionColumn) {
                        switch ($action) {
                            case 'view':
                                return ["establecimiento/$action", 'id' => $model->id];
                                break;
                            case 'update':
                                return ["establecimiento/save", 'id' => $model->id];
                                break;
                            case 'delete':
                                return ["establecimiento/$action", 'id' => $model->id];
                                break;
                            case 'dialisis':
                                return ["dialisis/save", 'id' => $model->id];
                                break;
                            case 'movimiento':
                                return ["hospmovimientohosp/save", 'id' => $model->id];
                                break;
                            case 'ambulancia':
                                return ["hospambulancias/save", 'id' => $model->id];
                                break;
                            case 'sergeneral':
                                return ["hospserviciosgenerales/save", 'id' => $model->id];
                                break;
                            case 'agua':
                                return ["hospagua/save", 'id' => $model->id];
                                break;
                            case 'novedad':
                                return ["novedades/save", 'id' => $model->id];
                                break;
                        }
                    },
                    'buttons' => [
                        'view' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-eye-open',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Ver',
                                'aria-label' => 'Ver',
                                'data-pjax' => 0,
                                'data-title' => 'Ver ' . $model->id,
                                'data-hide-save' => true,
                                'class' => 'link-for-modal',
                            ]);
                        },
                        'update' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-pencil',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Actualizar',
                                'aria-label' => 'Actualizar',
                                'data-pjax' => 0,
                                'data-title' => 'Actualizar ' . $model->id,
                                'class' => 'link-for-modal',
                            ]);
                        },
                        'dialisis' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-heart',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Dialisis',
                                'aria-label' => 'Dialisis',
                                'data-pjax' => 0,
                                'data-title' => 'Dialisis ' ,
                                'class' => 'link-for-modal',
                            ]);
                        },
                         'novedad' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-exclamation-sign',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Novedad',
                                'aria-label' => 'Novedad',
                                'data-pjax' => 0,
                                'data-title' => 'Novedad ' ,
                                'class' => 'link-for-modal',
                            ]);
                        },
                        'ambulancia' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-bullhorn',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Ambulancia',
                                'aria-label' => 'Ambulancia',
                                'data-pjax' => 0,
                                'data-title' => 'Ambulancia ' ,
                                'class' => 'link-for-modal',
                            ]);
                        },
                        'sergeneral' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-wrench',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Servicios Generales',
                                'aria-label' => 'Servicios Generales',
                                'data-pjax' => 0,
                                'data-title' => 'Servicios Generales ' ,
                                'class' => 'link-for-modal',
                            ]);
                        },
                        'agua' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-tint',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Agua',
                                'aria-label' => 'Agua',
                                'data-pjax' => 0,
                                'data-title' => 'Agua ' ,
                                'class' => 'link-for-modal',
                            ]);
                        },
                        'movimiento' => function ($url, $model, $key)  {
                            $icon = Html::tag('span', '', [
                                'class' => 'glyphicon glyphicon-folder-close',
                            ]);
                            return Html::a($icon, $url, [
                                'title' => 'Movimiento',
                                'aria-label' => 'Movimiento',
                                'data-pjax' => 0,
                                'data-title' => 'Movimiento ' ,
                                'class' => 'link-for-modal',
                            ]);
                        },
                    ],
                    'template' => '{dialisis}{movimiento}{ambulancia}{sergeneral}{agua}{novedad}'
                ],
            ],
        ]); ?>
        <?php Pjax::end(); ?>
        </div>
    </div>
</div>
<style>
  .modal-content{
    width: 700px;
  }
</style>
<div class="modal fade" id="establecimiento-modal" role="dialog" aria-labelledby="establecimiento-modal-title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="establecimiento-modal-title"></h4>
            </div>
            <div class="modal-body" id="establecimiento-modal-body"></div>
            <div class="modal-footer" id="establecimiento-modal-footer">
                <button id="establecimiento-modal-close-btn" type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Cerrar') ?></button>
                <button id="establecimiento-modal-save-btn" type="button" class="btn btn-primary"><?= Yii::t('app', 'Guardar') ?></button>
            </div>
        </div>
    </div>
</div>

<?php
$this->registerJs(<<<JAVASCRIPT
    //When clicking a links loads the view in a modal
    $(document).on("click", ".link-for-modal", function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var method = $(this).data('method') ? $(this).data('method') : 'get';
        var title = $(this).data('title') ? $(this).data('title') : '';
        var hideSave = typeof $(this).data('hide-save') != "undefined" ? true : false;

        $.ajax({
            url: url,
            type: method,
            beforeSend: function(jqXHR, settings) {
                $("#establecimiento-modal-title").html(title);
                $("#establecimiento-modal-body").html('<center><div class="loader"></div></center>');

                if (hideSave) {
                    $("#establecimiento-modal-save-btn").hide();
                } else {
                    $("#establecimiento-modal-save-btn").show();
                }

                $("#establecimiento-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                $("#establecimiento-modal-body").html(data);
                $("#establecimiento-modal-body").find('select').each(function() {
                    loadSelect2(this);
                });
            },
        });
        return false;
    });

    //The modal save button, triggers the modal form submit
    $(document).on("click", "#establecimiento-modal-save-btn", function() {
        $("#establecimiento-modal form").submit();
    });

    //Modals forms are sended by ajax
    $(document).on("submit", "#establecimiento-modal form", function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            url: url,
            data: data,
            type: 'post',
            beforeSend: function(jqXHR, settings) {
                $("#establecimiento-modal-body").html('<center><div class="loader"></div></center>');
                $("#establecimiento-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                if (data != "close-modal") {
                    $("#establecimiento-modal-body").html(data);
                    $("#establecimiento-modal-body").find('select').each(function() {
                        loadSelect2(this);
                    });
                } else {
                    $("#establecimiento-modal").modal("hide");
                    $.pjax({container: '#establecimiento-grid-pjax'})
                }
            }
        });

        return false;
    });
JAVASCRIPT
);

$this->registerJs(<<<JAVASCRIPT
    //Select2 is activated when the page loads
    $("select").each(function() {
        loadSelect2(this);
    });

    //After a pjax load, Select2 is reactivated
    $(document).on('pjax:complete', function() {
        $("select").each(function() {
            loadSelect2(this);
        });
    });
JAVASCRIPT
);
