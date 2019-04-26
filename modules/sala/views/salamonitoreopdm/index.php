<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\sala\models\SalamonitoreopdmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Salamonitoreopdm');
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
        <?php Pjax::begin(['id' => 'salamonitoreopdm-grid-pjax']); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a(Yii::t('app', 'Crear Salamonitoreopdm'), ['save '], [
                'class' => 'btn btn-success link-for-modal',
                'data-title' => Yii::t('app', 'Crear Salamonitoreopdm')
,
                'data-pjax' => 0,
            ]) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

            'id',
            'estatus_llamada',
            'ulcera',
            'grado_ulcera',
            'cod_nacionalidad_brigadista',
                //'cedula_brigadista',
                //'pnombre_brigadista',
                //'snombre_brigadista',
                //'papellido_brigadista',
                //'sapellido_brigadista',
                //'telefono_brigadista',
                //'cod_nacionalidad_est_ucs',
                //'cedula_est_ucs',
                //'pnombre_est_ucs',
                //'snombre_est_ucs',
                //'papellido_est_ucs',
                //'sapellido_est_ucs',
                //'telefono_est_ucs',
                //'fecha_ultima_rehabilitacion',
                //'fecha_proxima_rehabilitacion',
                //'verificada_rehabilitacion',
                //'evolucion',
                //'fecha_inf',
                //'hora_inf',
                //'fecha_sist',
                //'horas_sist',
                //'id_usuario',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'urlCreator' => function($action, $model, $key, $index, $actionColumn) {
                        switch ($action) {
                            case 'view':
                                return ["salamonitoreopdm/$action", 'id' => $model->id];
                                break;
                            case 'update':
                                return ["salamonitoreopdm/save", 'id' => $model->id];
                                break;
                            case 'delete':
                                return ["salamonitoreopdm/$action", 'id' => $model->id];
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

<div class="modal fade" id="salamonitoreopdm-modal" role="dialog" aria-labelledby="salamonitoreopdm-modal-title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="salamonitoreopdm-modal-title"></h4>
            </div>
            <div class="modal-body" id="salamonitoreopdm-modal-body"></div>
            <div class="modal-footer" id="salamonitoreopdm-modal-footer">
                <button id="salamonitoreopdm-modal-close-btn" type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Cerrar') ?></button>
                <button id="salamonitoreopdm-modal-save-btn" type="button" class="btn btn-primary"><?= Yii::t('app', 'Guardar') ?></button>
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
                $("#salamonitoreopdm-modal-title").html(title);
                $("#salamonitoreopdm-modal-body").html('<center><div class="loader"></div></center>');

                if (hideSave) {
                    $("#salamonitoreopdm-modal-save-btn").hide();
                } else {
                    $("#salamonitoreopdm-modal-save-btn").show();
                }

                $("#salamonitoreopdm-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                $("#salamonitoreopdm-modal-body").html(data);
                $("#salamonitoreopdm-modal-body").find('select').each(function() {
                    loadSelect2(this);
                });
            }, 
        });
        return false;
    });

    //The modal save button, triggers the modal form submit
    $(document).on("click", "#salamonitoreopdm-modal-save-btn", function() {
        $("#salamonitoreopdm-modal form").submit();
    });

    //Modals forms are sended by ajax
    $(document).on("submit", "#salamonitoreopdm-modal form", function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            url: url,
            data: data,
            type: 'post',
            beforeSend: function(jqXHR, settings) {
                $("#salamonitoreopdm-modal-body").html('<center><div class="loader"></div></center>');
                $("#salamonitoreopdm-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                if (data != "close-modal") {
                    $("#salamonitoreopdm-modal-body").html(data);
                    $("#salamonitoreopdm-modal-body").find('select').each(function() {
                        loadSelect2(this);
                    });
                } else {
                    $("#salamonitoreopdm-modal").modal("hide");
                    $.pjax({container: '#salamonitoreopdm-grid-pjax'})
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