<?php
$script = '
  function actEstad(id, valor){
    $("#"+id).attr("data-value", valor);
    $("#"+id).animateNumbers($("#"+id).attr("data-value"), true, parseInt($("#"+id).attr("data-duration")));
  }
  ';

$this->registerJs($script, $this::POS_HEAD);
?>

    <div class="content">
        <!-- Start info box -->
            <div class="row top-summary">
                <div class="col-lg-3 col-md-6">
                    <div class="widget darkblue-2 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata"><b>NACIMIENTOS</b></p>
                                <h2><span id="per-valor" class="animate-number" data-value="0" data-duration="3000">0</span></h2>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12 tile-stats">
                                    <i id="per_total" title="Total" class="fa fa-inbox enlinea"></i>
                                    <i id="per_hoy" title="Hoy" class="fa fa-clock-o enlinea"></i>
                                    <i id="per_semana" title="Última Semana" class="fa fa-calendar enlinea"></i>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="widget kavach animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata"><b>CERTIFICADOS NACIMIENTOS</b></p>
                                <h2><span id="soli-valor" class="animate-number" data-value="0" data-duration="3000">0</span></h2>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12 tile-stats">
                                    <i id="soli_total" title="Total" class="fa fa-inbox enlinea"></i>
                                    <i id="soli_hoy" title="Hoy" class="fa fa-clock-o enlinea"></i>
                                    <i id="soli_semana" title="Última Semana" class="fa fa-calendar enlinea"></i>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="widget darkblue-2 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata"><b>ESTADO MAS NACIMIENTOS</b></p>
                                <h2><span id="edo-valor" class="animate-number" data-value="70389" data-duration="3000">0</span></h2>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <div class="row">
                                <div id="edo-nombre" class="col-sm-12">
                                    DISTRITO CAPITAL
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="widget kavach animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon">
                                <i class="fa fa-institution"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata"><b>ESTABLECIMIENTO</b></p>
                                <h2><span class="animate-number" data-value="18648" data-duration="3000">0</span></h2>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    MATERNIDAD CONCEPCION PALACIOS
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
           </div>
         </div>
           <div class="row">
               <div class="col-lg-4 portlets">
                 <div id="website-statistics1" class="widget">
                     <div class="widget-header transparent">
                         <h2><i class="icon-chart-line"></i> <strong>Ev-25</strong> ¿Qué es?</h2>
                    </div>
                    <div class="widget-content">
                        <div id="website-statistic" class="statistic-chart">
                            El Sistema de Captacion y Seguimiento Materno Infantil, garantiza la atención especializada y acompañamiento en los períodos de preparto,
                             durante y postparto, que protege sin exclusión, tanto la vida de la mujer embarazada como la vida del hijo por nacer.
                             El objetivo general del SICASMI es mejorar la atención a la mujer embarazada y a los recién nacidos,
                             trabajo que incluye la participación de los consejos comunales y toda la sociedad organizada, esta iniciativa social no sólo velará por la procura de
                             partos más humanos y seguros, sino por la disminución de los índices de mortalidad materno infantil.
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 portlets">
                    <div id="website-statistics1" class="widget">
                        <div class="widget-header transparent">
                            <h2><i class="icon-chart-line"></i> <strong>Solicitudes</strong> Medicamentos a Nivel Nacional</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                  <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                                    <i class="fa fa-cogs"></i>
                                  </a>
                                  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Establecimientos de Salud</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                 <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="website-statistic" class="statistic-chart">
                                <div class="row stacked">
                                    <div class="col-sm-12">
                                       <div class="clearfix"></div>
                                       <div id="paper-middle">
                                            <div id="map" style="width:100%; height:100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

                   <div class="col-lg-6 portlets">
                       <div id="website-statistics1" class="widget">
                           <div class="widget-header transparent">
                               <h2><i class="icon-chart-line"></i> <strong>Graficos</strong> Aqui van algunas estadisticas</h2>
                               <div class="additional-btn">
                                   <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                     <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                       <li><a href="#">Establecimientos de Salud</a></li>
                                       <li><a href="#">Another action</a></li>
                                       <li><a href="#">Something else here</a></li>
                                       <li class="divider"></li>
                                       <li><a href="#">Separated link</a></li>
                                     </ul>
                                    <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                   <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                   <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                               </div>
                           </div>
                           <div class="widget-content">
                               <div id="website-statistic" class="statistic-chart">
                                   <div class="row stacked">
                                       <div class="col-sm-12">
                                          <div class="clearfix"></div>
                                          <div id="paper-middle">
                                               <div id="map" style="width:100%; height:100%;"></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 portlets">
                       <div id="website-statistics1" class="widget">
                           <div class="widget-header transparent">
                               <h2><i class="icon-chart-line"></i> <strong>Graficos</strong> Aqui van algunas estadisticas</h2>
                               <div class="additional-btn">
                                   <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                     <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                       <li><a href="#">Establecimientos de Salud</a></li>
                                       <li><a href="#">Another action</a></li>
                                       <li><a href="#">Something else here</a></li>
                                       <li class="divider"></li>
                                       <li><a href="#">Separated link</a></li>
                                     </ul>
                                    <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                   <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                   <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                               </div>
                           </div>
                           <div class="widget-content">
                               <div id="website-statistic" class="statistic-chart">
                                   <div class="row stacked">
                                       <div class="col-sm-12">
                                          <div class="clearfix"></div>
                                          <div id="paper-middle">
                                               <div id="map" style="width:100%; height:100%;"></div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
    </div>

    <script type="text/javascript" src="<?= Yii::$app->request->baseUrl; ?>/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>

     <script>
        function myMap() {
        var map= {
            center:new google.maps.LatLng(8.52980,-66.22829),
            zoom:6,
        };
        var map=new google.maps.Map(document.getElementById("map"),map);
        }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxH0fa2cuNeYHwXzlSqkI1s6yEq8sCmAo&callback=myMap"></script>
<script type="text/javascript">
  $(document).on('click', '.per-actualizar', function(){
    var id = 'per-valor';
    var r = $(this).data('rango');

    $(id).html('Contando...');

    $.get("<?=Yii::$app->urlManager->createUrl('solicitante/get-cant')?>", {
      'r':r,
    }, function(data){
      actEstad(id, data);
    });
  });

  $(document).on('click', '.soli-actualizar', function(){
    var id = 'soli-valor';
    var r = $(this).data('rango');

    $(id).html('Contando...');

    $.get("<?=Yii::$app->urlManager->createUrl('solicitud/get-cant')?>", {
      'r':r,
    }, function(data){
      actEstad(id, data);
    });
  });

  $(document).ready(function(){
    $(".per-actualizar[data-rango='todo']").click();
    $(".soli-actualizar[data-rango='todo']").click();
  });
</script>
