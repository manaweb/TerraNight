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

        <div class="section">
          <div class="container col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="row">
              <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <h1 class="pull-left aldo">Informações</h1>
              </div>
            </div>
            <div class="row">
                <p class="gc col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                  <?php
                    $SQL = "SELECT * FROM historico ORDER BY id DESC";

                    $result = mysql_query($SQL);
                    $informacao = mysql_fetch_assoc($result);
                    echo utf8_encode($informacao['texto']);
                  ?>
                </p> 
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <img class="img-responsive" src="http://lorempixel.com/output/abstract-q-g-300-300-1.jpg" alt="...">
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <img class="img-responsive" src="http://lorempixel.com/output/abstract-q-g-300-300-1.jpg" alt="...">
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <img class="img-responsive" src="http://lorempixel.com/output/abstract-q-g-300-300-1.jpg" alt="...">
              </div>
            </div>
          </div>
        </div><!--/.section - section3 -->
         <script>
          $(function() {
            var data = new Date();
            $('.faq-cat-tabs li').removeClass('active').eq(data.getMonth()).addClass('active');
          });
         </script>
  </body>
 <?php include 'rodape.php'; ?>
</html>
