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

        <div id="" class="section">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            

            <h2 class="modal-title center-block aldo">Recuperar senha</h2>
            <hr>

                  <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
                    <form action="" method="post" class="form" role="form" id="recuperarSenha">
                      <div>
                        <div class="alert alert-success">
                          <a href="#" class="close gc" data-dismiss="alert">&times;</a>
                          Sua senha foi recuperada com sucesso, a senha foi enviada para o seu email.
                      </div>    
                    </div>
                      <br />
                      <input class="form-control" name="email" placeholder="Digite seu e-mail" type="email" required autofocus />
                      <br />
                      <button class="btn btn-lg btn-success btn-block gc" type="submit">Enviar</button>
                      </form>
                      <br>
                  </div>
          </div>
        </div>
      </div>
    </div>



      <?php include 'rodape.php'; ?>

      <script>
        $('#recuperarSenha').submit(function() {
          $.ajax({
              url: 'recuperar.php',
              type: 'POST',
              dataType: 'html',
              data: $('#recuperarSenha').serialize(),
              success: function(data) {
               if (data != undefined && data != '')
                $('#recuperarSenha .alert').removeClass('alert-success').addClass('alert-danger').text(data);
              else
                $('#recuperarSenha .alert').removeClass('alert-danger').addClass('alert-success').text('Sua senha foi recuperada com sucesso, a senha foi enviada para o seu email.');
               $('#recuperarSenha .alert').fadeIn('slow',function() {
                setTimeout(function() {
                  $('#recuperarSenha .alert').fadeOut('slow');
                },4000);
               });
              }
            });
          return false;
        });
      </script>

    <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

</body>
  </html>