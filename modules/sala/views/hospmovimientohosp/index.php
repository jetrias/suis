<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\sala\models\HospmovimientohospSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hospmovimientohosp');
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
        <?php Pjax::begin(['id' => 'hospmovimientohosp-grid-pjax']); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a(Yii::t('app', 'Crear Hospmovimientohosp'), ['save '], [
                'class' => 'btn btn-success link-for-modal',
                'data-title' => Yii::t('app', 'Crear Hospmovimientohosp')
,
                'data-pjax' => 0,
            ]) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

            'codigo',
            'establecimiento_de_salud',
            'cod_establecimiento_salud',
            'camas_operativas',
            'pacientes_criticos_adultos',
                //'pacientes_criticos_ninos',
                //'uti_neonatal_pacientes',
                //'utineonatal_cupos_disponibles',
                //'uti_camas_operativas',
                //'uti_camas_disponibles',
                //'quirofanos_emergencias_operativos',
                //'quirofanos_emergencias_inoperativos',
                //'equipo_de_guardia',
                //'total_muertes_maternas',
                //'detalle_muerte_materna',
                //'servicio_hemoderivados',
                //'servicio_hemoderivados_operativos',
                //'observaciones:ntext',
                //'id_usuario',
                //'fecha_inf',
                //'fecha_sist',
                //'hora_sist',
                //'id',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'urlCreator' => function($action, $model, $key, $index, $actionColumn) {
                        switch ($action) {
                            case 'view':
                                return ["hospmovimientohosp/$action", 'id' => $model->id];
                                break;
                            case 'update':
                                return ["hospmovimientohosp/save", 'id' => $model->id];
                                break;
                            case 'delete':
                                return ["hospmovimientohosp/$action", 'id' => $model->id];
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
                    ],
                ],
            ],
        ]); ?>
        <?php Pjax::end(); ?>
        </div>
    </div>
</div>

<div class="modal fade" id="hospmovimientohosp-modal" role="dialog" aria-labelledby="hospmovimientohosp-modal-title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="hospmovimientohosp-modal-title"></h4>
            </div>
            <div class="modal-body" id="hospmovimientohosp-modal-body"></div>
            <div class="modal-footer" id="hospmovimientohosp-modal-footer">
                <button id="hospmovimientohosp-modal-close-btn" type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Cerrar') ?></button>
                <button id="hospmovimientohosp-modal-save-btn" type="button" class="btn btn-primary"><?= Yii::t('app', 'Guardar') ?></button>
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
                $("#hospmovimientohosp-modal-title").html(title);
                $("#hospmovimientohosp-modal-body").html('<center><div class="loader"></div></center>');

                if (hideSave) {
                    $("#hospmovimientohosp-modal-save-btn").hide();
                } else {
                    $("#hospmovimientohosp-modal-save-btn").show();
                }

                $("#hospmovimientohosp-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                $("#hospmovimientohosp-modal-body").html(data);
                $("#hospmovimientohosp-modal-body").find('select').each(function() {
                    loadSelect2(this);
                });
            }, 
        });
        return false;
    });

    //The modal save button, triggers the modal form submit
    $(document).on("click", "#hospmovimientohosp-modal-save-btn", function() {
        $("#hospmovimientohosp-modal form").submit();
    });

    //Modals forms are sended by ajax
    $(document).on("submit", "#hospmovimientohosp-modal form", function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            url: url,
            data: data,
            type: 'post',
            beforeSend: function(jqXHR, settings) {
                $("#hospmovimientohosp-modal-body").html('<center><div class="loader"></div></center>');
                $("#hospmovimientohosp-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                if (data != "close-modal") {
                    $("#hospmovimientohosp-modal-body").html(data);
                    $("#hospmovimientohosp-modal-body").find('select').each(function() {
                        loadSelect2(this);
                    });
                } else {
                    $("#hospmovimientohosp-modal").modal("hide");
                    $.pjax({container: '#hospmovimientohosp-grid-pjax'})
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