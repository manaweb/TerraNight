<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
  <![endif]-->
  <!--[if IE 7]>
  <html class="no-js lt-ie9 lt-ie8">
    <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9">
      <![endif]-->
      <!--[if gt IE 8]>
      <!-->
      <html class="no-js">
        <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/modern-business.css">
        <link rel="stylesheet" href="fonts/alte_din_1451_mittelschrift.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if gte IE 9]>
        <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
        <!--[if lt IE 8]>
        <link href="/css/bootstrap-ie7.css" rel="stylesheet">
        <![endif]-->
</head>
<body data-spy="scroll" data-target=".nav">
  <?php include_once("analyticstracking.php") ?>

        <?php include 'cabecalho.php'; ?>


        <div id="section2" class="section">
          
            <div class="container col-lg-8 col-md-8 col-sm-6 col-xs-12">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                  <h1 class="text-center aldo">Últimas Fotos<span style="background: url(img/traco.jpg) right repeat-x; display: inline-block; width: 60%; height: 20px"></span></h1>
                  </div>
              </div>
              <div class="row">
                <?php $query = mysql_query("SELECT id_galeria, titulo, codigo, DATE_FORMAT(data,'%d/%m') as data1 FROM tbgalerias WHERE flag_status = 1"); while ($dadosAlbum = mysql_fetch_assoc($query)) { ?>
                <div class="text-center col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2">
                  <h1>
                     <a href="/fotos.php?hash=<?=$dadosAlbum['codigo'].'&gcod='.$dadosAlbum['id_galeria'].'&data='.urlencode($dadosAlbum['data1'])?>">
                      <img src="painel/arquivos/galeria/<?=$dadosAlbum['codigo']?>/capa.jpg" class="img-responsive center-block albumcapa"  alt="<?=$dadosAlbum['titulo']?>"/>
                      <span class="gc ttdata posicaodata"><?=$dadosAlbum['data1']?></span>
                    </a>
                  </h1>
                </div>
                <?php } ?>
              </div><!-- /.row -->
              <div class="row center-block">
                
                  <ul class="list-inline acompanhe ">
                    <li>
                      <div>
                        <a href="https://www.facebook.com/boateterranight" class="social" target="_blank">
                          <img src="../img/title_facebook.png"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="https://twitter.com/search?q=terranight" class="social" target="_blank">
                          <img src="../img/title_twitter.png"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="http://statigr.am/tag/terranight/" class="social" target="_blank">
                          <img src="../img/title_instagram.png"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="http://www.youtube.com/results?search_query=terra+night" class="social" target="_blank">
                          <img src="../img/title_youtube.png"></a>
                      </div>
                    </li>
                  </ul>
                
              </div><!-- /.row --> 
            </div><!-- /.container -->

            <div class="container col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="row">
                  <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                      <h1 class="text-center aldo">Programação<hr></h1>
                  </div>  
              </div>
              <div class="row">
                <div class="tab-content faq-cat-content ttdata">
                       <ul class="agenda">

                        <?php $query = mysql_query("SELECT descricao, titulo, DAY(datahora) as dia, MONTH(datahora) as mes FROM tbprogramacao WHERE MONTH(datahora) = '".date('m')."' ORDER BY datahora ASC");
                              for ($i = 0;$dadosAgenda = mysql_fetch_assoc($query);$i++) {
                            ?><li>
                            <div class="tab-pane in fade" id="faq-cat-<?=$i?>">
                              <div class="panel-group" id="accordion-cat-<?=$i?>">
                                  <div class="panel panel-faq" id="contentDarkTerraNiggaNight">
                                      <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion-cat-<?=$i?>" href="#faq-cat-<?=$i?>-sub-<?=$i?>">
                                            <div class="pull-left">
                                              
                                              <p class="dia gc" style="color:#000000 !important;">
                                                <b><?=((int)$dadosAgenda['dia'] < 10 ? "0{$dadosAgenda['dia']}" : $dadosAgenda['dia'])?></b>
                                              </p>
                                              <p class="mes gc" style="color:#000000 !important;">
                                                <b><?=((int)$dadosAgenda['mes'] < 10 ? "0{$dadosAgenda['mes']}" : $dadosAgenda['mes'])?></b>
                                              </p>
                                              <img class="img-responsive" src="../img/ovo-data.png">
                                              
                                            </div>
                                            <div class="agendaposition">
                                              <h3 class="gc">
                                               <b><?=utf8_encode($dadosAgenda['titulo'])?></b>
                                                <br>
                                                <small> 
                                                  <b>+ informações</b>
                                                </small>
                                              </h3>
                                            </div>
                                          </a>
                                      </div>     
                                    <div id="faq-cat-<?=$i?>-sub-<?=$i?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          <p class="gc"><?=utf8_encode($dadosAgenda['descricao'])?></p>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                            </li><br><?php } ?>
                          
                          </ul> 
                        </div><!--./faq-cat-one-->
                </div><!--/.faq-cat-content-->
            </div>
          </div>
        </div><!-- /.section -->  
        <div class="clearfix"></div>



       <!-- <div class="section text-center">
          <div class="container sessao center-block">
            <div class="row visible-lg visible-md">
              <div class="col-lg-7 col-lg-offset-3">
                <a href="http://www.facebook.com.br/terranight">
                  <img class="pull-left" src="img/FB_logo.png" alt="Facebook"/>
                  <h2 class="pull-left social gc">&nbsp;&nbsp;Visite nossa fanpage no <b>Facebook e Curta!!</b></h2>
                </a>
              </div>
            </div>
            <div class="row visible-lg visible-md">
              <div class="col-lg-7 col-lg-offset-3">
                <a href="http://www.twitter.com/#terranight">
                  <img class="pull-left" src="img/Twitter_logo_blue.png" alt="Twitter"/>
                  <h2 class="pull-left social gc">&nbsp;&nbsp;<b>#Terranight</b></h2>
                </a>
              </div>
            </div>
            <div class="row visible-sm visible-xs">
              <div class="col-lg-7 col-lg-offset-3">
                <a href="http://www.facebook.com.br/terranight">
                  <img src="img/FB_logo.png" alt="Facebook"/>
                  <h3 class="social gc">Visite nossa fanpage no <b>Facebook e Curta!!</b></h3>
                </a>
              </div>
            </div>
            <br>
            <div class="row visible-sm visible-xs">
              <div class="col-lg-7 col-lg-offset-3">
                <a href="http://www.twitter.com/#terranight">
                  <img src="img/Twitter_logo_blue.png" alt="Twitter"/>
                  <h3 class="social gc"><b>#Terranight</b></h3>
                </a>
              </div>
            </div>
          </div>
          </div>-->
     

        <div class="clearfix"></div>

        <div id="section3" class="section">

          <div class="container">

            <div class="row">
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <h1 class="text-center aldo">Programação</h1>
                <hr>
              </div>
            </div>

            <br>

      <div class="row headagenda center-block">
        <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-0" data-toggle="tab"><b class="gc meses">JAN</b></a></li>
                <li><a href="#faq-cat-1" data-toggle="tab"><b class="gc meses">FEV</b></a></li>
                <li><a href="#faq-cat-2" data-toggle="tab"><b class="gc meses">MAR</b></a></li>
                <li><a href="#faq-cat-3" data-toggle="tab"><b class="gc meses">ABR</b></a></li>
                <li><a href="#faq-cat-4" data-toggle="tab"><b class="gc meses">MAI</b></a></li>
                <li><a href="#faq-cat-5" data-toggle="tab"><b class="gc meses">JUN</b></a></li>
                <li><a href="#faq-cat-6" data-toggle="tab"><b class="gc meses">JUL</b></a></li>
                <li><a href="#faq-cat-7" data-toggle="tab"><b class="gc meses">AGO</b></a></li>
                <li><a href="#faq-cat-8" data-toggle="tab"><b class="gc meses">SET</b></a></li>
                <li><a href="#faq-cat-9" data-toggle="tab"><b class="gc meses">OUT</b></a></li>
                <li><a href="#faq-cat-10" data-toggle="tab"><b class="gc meses">NOV</b></a></li>
                <li><a href="#faq-cat-11" data-toggle="tab"><b class="gc meses">DEZ</b></a></li>

            </ul>
    
            <!-- Tab panes -->

            <div class="tab-content faq-cat-content ttdata">
                   <ul class="agenda">

                    <?php $query = mysql_query("SELECT descricao, titulo, DAY(datahora) as dia, MONTH(datahora) as mes FROM tbprogramacao WHERE MONTH(datahora) = '".date('m')."' ORDER BY datahora ASC");
                          for ($i = 0;$dadosAgenda = mysql_fetch_assoc($query);$i++) {
                        ?><li>
                        <div class="tab-pane in fade" id="faq-cat-<?=$i?>">
                          <div class="panel-group" id="accordion-cat-<?=$i?>">
                              <div class="panel panel-faq" id="contentDarkTerraNiggaNight">
                                  <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-<?=$i?>" href="#faq-cat-<?=$i?>-sub-<?=$i?>">
                                        <div class="pull-left">
                                          
                                          <p class="dia gc" style="color:#000000 !important;">
                                            <b><?=((int)$dadosAgenda['dia'] < 10 ? "0{$dadosAgenda['dia']}" : $dadosAgenda['dia'])?></b>
                                          </p>
                                          <p class="mes gc" style="color:#000000 !important;">
                                            <b><?=((int)$dadosAgenda['mes'] < 10 ? "0{$dadosAgenda['mes']}" : $dadosAgenda['mes'])?></b>
                                          </p>
                                          <img class="img-responsive" src="../img/ovo-data.png">
                                          
                                        </div>
                                        <div class="agendaposition">
                                          <h3 class="gc">
                                           <b><?=utf8_encode($dadosAgenda['titulo'])?></b>
                                            <br>
                                            <small> 
                                              <b>+ informações</b>
                                            </small>
                                          </h3>
                                        </div>
                                      </a>
                                  </div>     
                                <div id="faq-cat-<?=$i?>-sub-<?=$i?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                      <p class="gc"><?=utf8_encode($dadosAgenda['descricao'])?></p>
                                    </div>
                                </div>
                             </div>
                         </div>
                        </li><br><?php } ?>
                      
                      </ul> 
                    </div><!--./faq-cat-one-->

                

       
         </div><!--/.faq-cat-content-->
        
              <br>
          <div class="center-block col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <img class="img-responsive center-block" src="../img/logo-ovo.png">
          </div><!--/.col-lg-6-->
          </div><!--/.col-lg-6-->
       </div><!--/.row-->
     </div><!--/.container-->
    </div><!--/.section - section3 --> 


      <div class="clearfix"></div>

              <div class="section text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <ul class="list-inline acompanhe ">
                  <li>
                    <div>
                      <a href="https://www.facebook.com/boateterranight" class="social" target="_blank">
                        <img src="../img/title_facebook.png"></a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="https://twitter.com/search?q=terranight" class="social" target="_blank">
                        <img src="../img/title_twitter.png"></a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="http://statigr.am/tag/terranight/" class="social" target="_blank">
                        <img src="../img/title_instagram.png"></a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="http://www.youtube.com/results?search_query=terra+night" class="social" target="_blank">
                        <img src="../img/title_youtube.png"></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.row --> </div>
          <!-- /.container --> </div>
        <!-- /.section -->
        <div class="clearfix"></div>
        
      <div class="section text-center">
        <div class="container maps center-block">
          <div class="row col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">

            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <style>
                html, body, #map-canvas {
                  height: 100%;
                  margin: 0px;
                  padding: 0px
                }
              </style>
            <script type="text/javascript">
              window.onload = function() {
                  initialize();
              }
           
              function initialize() {
                  var myLatlng = new google.maps.LatLng(-20.786529,-48.332228);
                  
                  var myOptions = {
                      zoom: 15,
                      center: myLatlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP        }
                   
                  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                   
                  var contentString = "AP Móveis - A empresa, devidamente, atua no mercado a mais de 10 anos. Atualmente se encontra instalada no Distrito Industrial de JABOTICABAL-SP, colaborando para o crescimento do Distrito da Cidade...";
                   
                  var infowindow = new google.maps.InfoWindow({
                      content: contentString
                  });
                   
                  var marker = new google.maps.Marker({
                      position: myLatlng,
                      icon: '../img/marcador.png',
                      map: map,
                      title: "Terra Night"
                  });


                  google.maps.event.addListener(marker, 'click', function() {
                      infowindow.open(map,marker);
                  });

                  var styles = [{"featureType":"water","stylers":[{"color":"#021019"}]},{"featureType":"landscape","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"transit","stylers":[{"color":"#146474"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}] ;
                map.setOptions({styles: styles});
              }
          </script>
            <div id="map_canvas" style="width:3000px;height:365px;" class="img-responsive" type="submit"></div>
          </div>
        </div>
      </div>

      <?php include 'rodape.php'; ?>   

    <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
</body>
  </html>