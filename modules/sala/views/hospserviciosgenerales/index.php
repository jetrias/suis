<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\sala\models\HospserviciosgeneralesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hospserviciosgenerales');
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
        <?php Pjax::begin(['id' => 'hospserviciosgenerales-grid-pjax']); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a(Yii::t('app', 'Crear Hospserviciosgenerales'), ['save '], [
                'class' => 'btn btn-success link-for-modal',
                'data-title' => Yii::t('app', 'Crear Hospserviciosgenerales')
,
                'data-pjax' => 0,
            ]) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

            'cod_establecimiento_salud',
            'establecimiento_de_salud',
            'planta_electrica_operativa',
            'total_plantas_electricas_operativas',
            'total_plantas_electricas_inoperativas',
                //'planta_electrica_aceite',
                //'planta_electrica_cantidad_aceite_requerido',
                //'planta_electrica_tipo_aceite_requerido',
                //'planta_electrica_dissel',
                //'planta_electrica_cantidad_dissel_requerido',
                //'planta_electrica_bateria',
                //'planta_electrica_cantidad_baterias_requeridas',
                //'planta_electrica_nivel_dissel_restante',
                //'planta_electrica_refrigerante_necesidad',
                //'planta_electrica_nivel_refrigerante_restante',
                //'planta_electrica_nivel_aceite_restante',
                //'planta_electrica_tecnico_de_guardia',
                //'planta_electrica_telefono_tecnico_guardia',
                //'refrigeracion_de_alimentos',
                //'gases_medicinales_operativo',
                //'gases_medicinales_reservas',
                //'equipos_esterilizacion',
                //'desechos',
                //'observaciones_desechos:ntext',
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
                                return ["hospserviciosgenerales/$action", 'id' => $model->id];
                                break;
                            case 'update':
                                return ["hospserviciosgenerales/save", 'id' => $model->id];
                                break;
                            case 'delete':
                                return ["hospserviciosgenerales/$action", 'id' => $model->id];
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

<div class="modal fade" id="hospserviciosgenerales-modal" role="dialog" aria-labelledby="hospserviciosgenerales-modal-title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="hospserviciosgenerales-modal-title"></h4>
            </div>
            <div class="modal-body" id="hospserviciosgenerales-modal-body"></div>
            <div class="modal-footer" id="hospserviciosgenerales-modal-footer">
                <button id="hospserviciosgenerales-modal-close-btn" type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Cerrar') ?></button>
                <button id="hospserviciosgenerales-modal-save-btn" type="button" class="btn btn-primary"><?= Yii::t('app', 'Guardar') ?></button>
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
                $("#hospserviciosgenerales-modal-title").html(title);
                $("#hospserviciosgenerales-modal-body").html('<center><div class="loader"></div></center>');

                if (hideSave) {
                    $("#hospserviciosgenerales-modal-save-btn").hide();
                } else {
                    $("#hospserviciosgenerales-modal-save-btn").show();
                }

                $("#hospserviciosgenerales-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                $("#hospserviciosgenerales-modal-body").html(data);
                $("#hospserviciosgenerales-modal-body").find('select').each(function() {
                    loadSelect2(this);
                });
            }, 
        });
        return false;
    });

    //The modal save button, triggers the modal form submit
    $(document).on("click", "#hospserviciosgenerales-modal-save-btn", function() {
        $("#hospserviciosgenerales-modal form").submit();
    });

    //Modals forms are sended by ajax
    $(document).on("submit", "#hospserviciosgenerales-modal form", function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            url: url,
            data: data,
            type: 'post',
            beforeSend: function(jqXHR, settings) {
                $("#hospserviciosgenerales-modal-body").html('<center><div class="loader"></div></center>');
                $("#hospserviciosgenerales-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                if (data != "close-modal") {
                    $("#hospserviciosgenerales-modal-body").html(data);
                    $("#hospserviciosgenerales-modal-body").find('select').each(function() {
                        loadSelect2(this);
                    });
                } else {
                    $("#hospserviciosgenerales-modal").modal("hide");
                    $.pjax({container: '#hospserviciosgenerales-grid-pjax'})
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