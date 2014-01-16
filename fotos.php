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
        <link rel="stylesheet" href="css/jquery.h5-lightbox.css">
        <link rel="stylesheet" href="css/bullets-slideshow.css">

        <!--[if lt IE 9]>
        <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
        <!--[if lt IE 8]>
        <link href="/css/bootstrap-ie7.css" rel="stylesheet">
        <![endif]-->
</head>
<body data-spy="scroll" data-offset="0" data-target="#myScrollspy">
  <?php include_once("analyticstracking.php") ?>
        <?php include 'cabecalho.php';?>
        <div class="section">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <h2 class="pull-left aldo">Álbum de fotos</h2>
              </div>
            </div>
            <div class="clearfix"></div>
              <div class="row center-block">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                       
                       <?php 
                            $gCod = $_GET['gcod'];
                            $hash = $_GET['hash'];
                            $data = urldecode($_GET['data']);
                            setcookie('lastURI','fotos.php?hash='.$hash.'&gcod='.$gCod.'&data='.urlencode($data).'',0);
                            $fotos = '';
                            if (isset($gCod) && isset($hash)) {
                              $query = mysql_query("SELECT imagem, legenda FROM tbgalerias_fotos WHERE id_galeria = '$gCod'");
                              $href = '';
                              $attr = '';

                              while ($fotosDados = mysql_fetch_assoc($query)) {
                                if ($_SESSION['isLogged'] == 1) {
                                  $href = 'painel/arquivos/galeria/'.$hash.'/fotos/'.$fotosDados['imagem'].'';
                                  $attr = 'data-toggle="lightbox" data-gallery="columnwrappers" data-parent=".wrapper-parent" data-type="image"';
                                }
                                else {
                                  $href = 'javascript:void(0);';
                                  $attr = '';
                                }
                                $fotos .= '<div class="portfolio-item col-lg-2 col-md-2 col-sm-2 col-xs-4 fotos-item">
                            <a href="'.$href.'" '.$attr.'><img class="img-responsive" src="painel/arquivos/galeria/'.$hash.'/miniaturas/'.$fotosDados['imagem'].'"></a>
                              </div>';
                              }
                            }else {
                              $query = mysql_query("SELECT id_galeria, titulo, codigo, DATE_FORMAT(data,'%d/%m/%Y') as data1 FROM tbgalerias ORDER BY id_galeria DESC");
                              while ($dadosAlbum = mysql_fetch_assoc($query)) {
                                $fotos .= '<div class="text-center col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 fotos-item">
                                  <h1>
                                    <a href="/fotos.php?hash='.$dadosAlbum['codigo'].'&gcod='.$dadosAlbum['id_galeria'].'&data='.urlencode($dadosAlbum['data1']).'">
                                      <img src="painel/img.php?img=arquivos/galeria/'.$dadosAlbum['codigo'].'/capa.jpg&x=245&y=164&corta=1" class="img-responsive albumcapa"  alt="'.$dadosAlbum['titulo'].'"/>
                                      <br>
                                      <span class="gc ttdata">'.utf8_encode($dadosAlbum['titulo']).'</span>
                                      <br>
                                      <span class="gc ttdata">'.$dadosAlbum['data1'].'</span>
                                    </a>
                                  </h1>
                                </div>';
                              }
                            }
                          ?>


                   <?=$fotos?>
                  
                 </div>
                </div><!-- /.row --> 
              </div><!-- /.container --> 
            </div><!-- /.section -->

        <?php include 'rodape.php';?>
  
<!-- yea, yea, not a cdn, i know -->
 <script src="../js/ekko-lightbox.js"></script>
    
          <script>
      jQuery(function ($) {
          /*$('#media .lightbox').click(function() {
            $('#lightbox-img').attr('src',$(this).attr('data-large-src'));
          });*/
          <?php if ($_SESSION['isLogged'] == 1) { ?>
           $('#open-image').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
          });
        });
          <?php }else { ?>
            $('.fotos-item').click(function() {
              $('.dropdown-menu').show();
              return false;
            });
          <?php } ?>
      });
      </script>

</body>
  </html>