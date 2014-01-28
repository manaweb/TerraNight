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
              <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <h1 class="pull-left aldo">Programação</h1>
              </div>
            </div>
            
              <div class="row headagenda">
                <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1 col-sm-7 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                  <!-- Nav tabs category -->
                  <ul class="nav nav-tabs faq-cat-tabs list-inline">
                    <li class="active">
                      <a href="#faq-cat-0" data-toggle="tab"> <b class="gcn meses">JAN</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-1" data-toggle="tab"> <b class="gcn meses">FEV</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-2" data-toggle="tab">
                        <b class="gcn meses">MAR</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-3" data-toggle="tab">
                        <b class="gcn meses">ABR</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-4" data-toggle="tab">
                        <b class="gcn meses">MAI</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-5" data-toggle="tab">
                        <b class="gcn meses">JUN</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-6" data-toggle="tab">
                        <b class="gcn meses">JUL</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-7" data-toggle="tab">
                        <b class="gcn meses">AGO</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-8" data-toggle="tab">
                        <b class="gcn meses">SET</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-9" data-toggle="tab">
                        <b class="gcn meses">OUT</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-10" data-toggle="tab">
                        <b class="gcn meses">NOV</b>
                      </a>
                    </li>
                    <li>
                      <a href="#faq-cat-11" data-toggle="tab">
                        <b class="gcn meses">DEZ</b>
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
            <br>
            <div class="row">
              <div class="tab col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                <!-- Tab panes -->
                <div class="tab tab-content faq-cat-content ttdata">
                  <ul class="agenda">

                    <?php $query = mysql_query("SELECT descricao, titulo, DAY(datahora) as dia, MONTH(datahora) as mes FROM tbprogramacao ORDER BY datahora ASC");
                          for ($i = 0;$dadosAgenda = mysql_fetch_assoc($query);$i++) {
                        ?>
                    <li>
                      <div class="tab-pane in fade" id="faq-cat-<?=$i?>">
                        <div class="panel-group" id="accordion-cat-<?=$i?>">
                          <div class="panel panel-faq contentDarkTerraNiggaNight">
                            <div class="panel-heading">
                              <a data-toggle="collapse" data-parent="#accordion-cat-<?=$i?>" href="#faq-cat-<?=$i?>-sub-<?=$i?>">
                                <div class="pull-left">
                                  <p class="dia gcn" style="color:#000000 !important;">
                                    <b><?=((int)$dadosAgenda['dia'] < 10 ? "0{$dadosAgenda['dia']}" : $dadosAgenda['dia'])?></b>
                                  </p>
                                  <p class="mes gcn" style="color:#000000 !important;">
                                    <b><?=((int)$dadosAgenda['mes'] < 10 ? "0{$dadosAgenda['mes']}" : $dadosAgenda['mes'])?></b>
                                  </p>
                                  <img class="img-responsive" src="../img/ovo-data.png"></div>
                                <div class="agendaposition">
                                  <h3 class="gcn">
                                    <b>
                                      <?=utf8_encode($dadosAgenda['titulo'])?></b>
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
                                <p class="gc">
                                  <?=utf8_encode($dadosAgenda['descricao'])?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <?php } ?></ul>
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
         <?php include 'rodape.php'; ?>
         <script>
          $(function() {
            var data = new Date();
            $('.faq-cat-tabs li').removeClass('active').eq(data.getMonth()).addClass('active');

            $.ajax({
                url: 'agenda.php?mes='+data.getMonth(),
                dataType: 'html',
                beforeSend: function() {
                  $('.contentDarkTerraNiggaNight').html('');
                },
                success: function(data) {
                  if ($('.contentDarkTerraNiggaNight').eq(0).html() == '')
                    $('.contentDarkTerraNiggaNight').eq(0).html(data);
                   else
                    $('.contentDarkTerraNiggaNight').eq(index).html(data);
                   if ($('.contentDarkTerraNiggaNight span').text() != '')
                      $('.agenda li').slice(1).hide();
                }
              });

             $('.faq-cat-tabs li a').click(function() {
              var index = $(this).index('.faq-cat-tabs li a');
              $.ajax({
                url: 'agenda.php?mes='+index,
                dataType: 'html',
                beforeSend: function() {
                  $('.contentDarkTerraNiggaNight').html('');
                },
                success: function(data) {
                  if ($('.contentDarkTerraNiggaNight').eq(0).html() == '')
                    $('.contentDarkTerraNiggaNight').eq(0).html(data);
                   else
                    $('.contentDarkTerraNiggaNight').eq(index).html(data);
                   if ($('.contentDarkTerraNiggaNight span').text() != '')
                      $('.agenda li').slice(1).hide();
                }
              });
            });
          });
         </script>
  </body>
</html>
