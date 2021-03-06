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
        <meta name="description" content="Boate Terra Night">
        <meta name="author" content="Boate Terra Night">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/modern-business.css">
        <link rel="stylesheet" href="fonts/alte_din_1451_mittelschrift.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bullets-slideshow.css">

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
<body data-spy="scroll" data-target=".nav" class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">

  <?php include_once("analyticstracking.php") ?>

        <?php include 'cabecalho.php'; ?>
<div class="clearfix"></div>
        <div id="section2">
            <div class="container col-lg-6 col-lg-offset-2 col-md-8 col-sm-6 col-xs-12">
              <div class="row center-block">
                  <h1 class="pull-left aldo">Últimas Fotos</h1>
              </div>
              <div class="row">
                <?php

                $query = mysql_query("SELECT id_galeria, titulo, codigo, DATE_FORMAT(data,'%d/%m') as data1 FROM tbgalerias WHERE flag_status = 1 ORDER BY id_galeria DESC");
                while ($dadosAlbum = mysql_fetch_assoc($query)) {
                ?>
                <div class="text-center col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <h1>
                     <a href="/fotos.php?hash=<?=$dadosAlbum['codigo'].'&gcod='.$dadosAlbum['id_galeria'].'&data='.urlencode($dadosAlbum['data1'])?>">
                      <img src="painel/img.php?img=arquivos/galeria/<?=$dadosAlbum['codigo'];?>/capa.jpg&x=245&y=164&corta=1" class="img-responsive center-block albumcapa"  alt="<?=$dadosAlbum['titulo']?>"/>
                      <span class="gc ttdata posicaodata pull-right"><?=$dadosAlbum['data1']?></span>
                    </a>
                  </h1>
                </div>
                <?php } ?>
              </div><!-- /.row -->
              <br>
              <div class="visible-lg visible-md hidden-sm hidden-xs">
                <div class="row text-center likebarcontent">
                   <iframe class="fbAvatar" name="f7e65ffb8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/plugins/like_box.php?app_id=113869198637480&amp;channel=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df26660671%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Fff5235b4c%26relation%3Dparent.parent&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fboateterranight&amp;locale=pt_BR&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false" ></iframe>
                    <div class="parentFbFaces">
                    <iframe class="fbFriendFaces" name="f189ac9d8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/plugins/like_box.php?app_id=113869198637480&amp;channel=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df227f89074%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Fff5235b4c%26relation%3Dparent.parent&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fboateterranight&amp;locale=pt_BR&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false"></iframe>
                </div>
              </div><!-- /.row -->
              <br>
              <div class="row text-center">
                  <ul class="list-inline acompanhe ">
                    <li>
                      <div>
                        <a href="http://instagram.com/boateterranight" class="social" target="_blank">
                         <img src="../img/title_instagram.png" alt="instagram"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="https://twitter.com/search?q=terranight" class="social" target="_blank">
                          <img src="../img/title_twitter.png" alt="Twitter"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="http://www.youtube.com/results?search_query=terra+night" class="social" target="_blank">
                          <img src="../img/title_youtube.png" alt="YouTube"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                          <a href="https://www.facebook.com/boateterranight" class="social" target="_blank">
                          <img src="../img/title_facebook.png" alt="Facebook"></a>
                      </div>
                    </li>
                  </ul>
              </div><!-- /.row --> 
           </div><!-- /.container -->
         </div><!-- /.container -->         

            <div class="container col-lg-2 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
              <div class="row center-block">
                    <h1 class="pull-left aldo">Programação</h1>
              </div>
              <div class="row">
                <div class="tab-content faq-cat-content ttdata">
                       <ul class="agenda">

                        <?php $query = mysql_query("SELECT descricao, titulo, DAY(datahora) as dia, MONTH(datahora) as mes FROM tbprogramacao ORDER BY datahora ASC limit 4");
                              for ($i = 0;$dadosAgenda = mysql_fetch_assoc($query);$i++) {
                            ?><li>
                            <div class="tab-pane in fade" id="faq-cat-<?=$i?>">
                              <div class="panel-group" id="accordion-cat-<?=$i?>">
                                  <div class="panel panel-faq" id="contentDarkTerraNiggaNight">
                                      <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion-cat-<?=$i?>" href="#faq-cat-<?=$i?>-sub-<?=$i?>">
                                            <div class="pull-left">
                                              <p class="dia gcn" style="color:#000000 !important;">
                                                <b><?=((int)$dadosAgenda['dia'] < 10 ? "0{$dadosAgenda['dia']}" : $dadosAgenda['dia'])?></b>
                                              </p>
                                              <p class="mes gcn" style="color:#000000 !important;">
                                                <b><?=((int)$dadosAgenda['mes'] < 10 ? "0{$dadosAgenda['mes']}" : $dadosAgenda['mes'])?></b>
                                              </p>
                                              <img class="img-responsive" src="../img/ovo-data.png" alt="Boate TerraNight">
                                            </div>
                                            <div class="agendaposition">
                                              <h4 class="gcn">
                                               <b><?=utf8_encode($dadosAgenda['titulo'])?></b>
                                                <br>
                                                <small> 
                                                  <b>+ informações</b>
                                                </small>
                                              </h4>
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
                           </div>
                          </li><?php } ?>
                        </ul> 
                  </div><!--./faq-cat-one-->
              </div><!--/.faq-cat-content-->
            </div><!-- /.container -->

          <div class="container col-lg-4 col-lg-offset-3 col-md-8 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-2 hidden-lg hidden-md visible-sm visible-xs">
            <div class="row center-block text-center likebarcontent">
               <iframe class="fbAvatar" name="f7e65ffb8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/plugins/like_box.php?app_id=113869198637480&amp;channel=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df26660671%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Fff5235b4c%26relation%3Dparent.parent&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fboateterranight&amp;locale=pt_BR&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false" ></iframe>
                <div class="parentFbFaces">
                    <iframe class="fbFriendFaces" name="f189ac9d8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/plugins/like_box.php?app_id=113869198637480&amp;channel=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df227f89074%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Fff5235b4c%26relation%3Dparent.parent&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fboateterranight&amp;locale=pt_BR&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false"></iframe>
                </div>
              </div><!-- /.row -->
              
              <div class="row text-center">
                  <ul class="list-inline acompanhe ">
                    <li>
                      <div>
                        <a href="https://www.facebook.com/boateterranight" class="social" target="_blank">
                          <img src="../img/title_facebook.png" alt="facebook"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="https://twitter.com/search?q=terranight" class="social" target="_blank">
                          <img src="../img/title_twitter.png" alt="Twitter"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="http://statigr.am/tag/terranight/" class="social" target="_blank">
                          <img src="../img/title_instagram.png" alt="instagram"></a>
                      </div>
                    </li>
                    <li>
                      <div>
                        <a href="http://www.youtube.com/results?search_query=terra+night" class="social" target="_blank">
                          <img src="../img/title_youtube.png" alt="YouTube"></a>
                      </div>
                    </li>
                  </ul>
              </div><!-- /.row --> 
           </div><!-- /.container -->
        </div><!-- /.section -->  

<div class="clearfix"></div>
        <div id="section3">
         <div class="container text-center col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
           <div class="row center-block">
              <h1 class="pull-left aldo">Como chegar</h1>
            </div>
          <div class="clearfix"></div>
          <div class="row maps center-block">
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

                     
                    var contentString = " descriçao balada";
                     
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
  </body>
 <?php include 'rodape.php'; ?>   
</html>
