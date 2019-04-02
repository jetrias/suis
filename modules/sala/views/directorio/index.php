<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\sala\models\DirectorioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Directorio');
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
        <?php Pjax::begin(['id' => 'directorio-grid-pjax']); ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a(Yii::t('app', 'Crear Directorio'), ['save '], [
                'class' => 'btn btn-success link-for-modal',
                'data-title' => Yii::t('app', 'Crear Directorio')
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
            'cod_establecimiento',
            'nombre_director',
            'telf_director',
            'nombre_agua',
                //'telf_agua',
                //'nombre_planta',
                //'telf_planta',
                //'telf_hosp',
                //'fecha_sist',
                //'hora_sist',
                //'id_usuario',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'urlCreator' => function($action, $model, $key, $index, $actionColumn) {
                        switch ($action) {
                            case 'view':
                                return ["directorio/$action", 'id' => $model->id];
                                break;
                            case 'update':
                                return ["directorio/save", 'id' => $model->id];
                                break;
                            case 'delete':
                                return ["directorio/$action", 'id' => $model->id];
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

<div class="modal fade" id="directorio-modal" role="dialog" aria-labelledby="directorio-modal-title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="directorio-modal-title"></h4>
            </div>
            <div class="modal-body" id="directorio-modal-body"></div>
            <div class="modal-footer" id="directorio-modal-footer">
                <button id="directorio-modal-close-btn" type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Cerrar') ?></button>
                <button id="directorio-modal-save-btn" type="button" class="btn btn-primary"><?= Yii::t('app', 'Guardar') ?></button>
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
                $("#directorio-modal-title").html(title);
                $("#directorio-modal-body").html('<center><div class="loader"></div></center>');

                if (hideSave) {
                    $("#directorio-modal-save-btn").hide();
                } else {
                    $("#directorio-modal-save-btn").show();
                }

                $("#directorio-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                $("#directorio-modal-body").html(data);
                $("#directorio-modal-body").find('select').each(function() {
                    loadSelect2(this);
                });
            }, 
        });
        return false;
    });

    //The modal save button, triggers the modal form submit
    $(document).on("click", "#directorio-modal-save-btn", function() {
        $("#directorio-modal form").submit();
    });

    //Modals forms are sended by ajax
    $(document).on("submit", "#directorio-modal form", function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        $.ajax({
            url: url,
            data: data,
            type: 'post',
            beforeSend: function(jqXHR, settings) {
                $("#directorio-modal-body").html('<center><div class="loader"></div></center>');
                $("#directorio-modal").modal("show");
            },
            success: function(data, textStatus, jqXHR) {
                if (data != "close-modal") {
                    $("#directorio-modal-body").html(data);
                    $("#directorio-modal-body").find('select').each(function() {
                        loadSelect2(this);
                    });
                } else {
                    $("#directorio-modal").modal("hide");
                    $.pjax({container: '#directorio-grid-pjax'})
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