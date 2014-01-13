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
            

            <h2 class="modal-title center-block text-center aldo">Cadastre-se</h2>
            <hr>
            <br/>

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <h3 class="modal-title center-block text-center gc">Login</h3>
                 <br>
                 <p class="gc text-center">
                    Se você já possuir um cadastro, entre com seu e-mail e senha para acessar o site. Caso tenha perdido sua senha, <a href="recuperarsenha.php">clique aqui.</a>
                    </p>
                <br>
                   <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav2">
                    <div>
                      <div class="alert alert-danger" style="display: none;">
                        <a href="#" class="close gc" data-dismiss="alert">&times;</a>
                        Usuário e/ou senha inválidos
                    </div>    
                      <div class="form-group col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                         <label class="sr-only gc" for="exampleInputEmail2">Email</label>
                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Digite seu email..." name="loginEmail" required>
                      </div>
                      <div class="form-group col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                         <label class="sr-only gc" for="exampleInputPassword2">Senha</label>
                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Digite sua senha..." name="loginPassword" required>
                      </div>
                      <div class="form-group col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12" id="loaderLogin2">
                         <img src="img/loading.gif" class="img-responsive gc center-block" style="width: 32px">
                      </div>
                      <br>
                      <div class="form-group col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                         <button type="submit" class="btn btn-success center-block btn-lg gc">Entrar</button>
                      </div>
                   </form>
                  </div>
              </div>

              <div class="col-lg-6 col-md-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <h3 class="modal-title center-block text-center gc">Formulario de Cadastro</h3>
                 <p class="gc text-center">
                Faça já seu cadastro e tenha acesso exclusivo as fotos, e ainda receba as informações, promoções em primeira mão. Preencha corretamente para ter acesso completo às informações.
                </p>
                  <BR>
                  <form action="" method="post" class="form" role="form" id="cadastroForm2">
                    <div>
                      <div class="alert alert-success">
                        <a href="#" class="close gc" data-dismiss="alert">&times;</a>
                        Seu cadastro foi efetuado com sucesso! Agora basta logar para poder visualizar as fotos.
                      </div>    
                    </div>
                    <br />
                    <div class="form-group col-lg-8 col-md-10 col-sm-8 col-xs-11">
                      <input class="form-control" name="primeironome" placeholder="Seu nome completo" type="text" required autofocus />
                    </div>
                      <br />
                    <div class="form-group col-lg-6 col-md-8 col-sm-6 col-xs-11">
                      <input class="form-control" name="tel" placeholder="Seu telefone" type="tel" required />
                    </div>
                      <br />
                    <div class="form-group col-lg-8 col-md-10 col-sm-8 col-xs-11">
                      <input class="form-control" name="email" placeholder="Seu email" type="email" required />
                    </div>
                      <br />
                    <div class="form-group col-lg-6 col-md-8 col-sm-6 col-xs-11">
                       <input class="form-control" name="senha" placeholder="Sua senha" type="password" required />
                     </div>
                      <br />
                      <button class="btn btn-lg btn-success btn-block gc" type="submit">
                          Finalizar Cadastro</button>
                      </form>
                      <br>
                  </div>
                </div>
              </div>
            </div>
          </div>


      <?php include 'rodape.php'; ?> 

      <script>
      $('#cadastroForm2').submit(function() {
          $.ajax({
              url: 'finalizar.php?type=cadastro',
              type: 'POST',
              dataType: 'html',
              data: $('#cadastroForm2').serialize(),
              success: function(data) {
               if (data != undefined && data != '')
                $('#cadastroForm2 .alert').removeClass('alert-success').addClass('alert-danger').text(data);
              else
                $('#cadastroForm2 .alert').removeClass('alert-danger').addClass('alert-success').text('Seu cadastro foi efetuado com sucesso! Agora basta logar para poder visualizar as fotos.');
               $('#cadastroForm2 .alert').fadeIn('slow',function() {
                setTimeout(function() {
                  $('#cadastroForm2 .alert').fadeOut('slow');
                },4000);
               });
              }
            });
          return false;
        });
      $('#login-nav2').submit(function() {
          var status = '';
          $.ajax({
              url: 'login.php',
              type: 'POST',
              dataType: 'html',
              data: $('#login-nav2').serialize(),
              async: false,
              beforeSend: function() {
                $('#loaderLogin2').fadeIn('slow');
              },
              success: function(data) {
               status = data;
               $('#loaderLogin2').fadeOut('slow');
              }
            });

         if (status != undefined && status == 'Error')  {
            $('#login-nav2 .alert').fadeIn('slow');
          }else {
            $('#login-nav2 .alert').fadeOut('slow',function() {
              var end = '<?=$_COOKIE["lastURI"]?>';
              window.location = end;
            });
          }
          return false;
        });
    </script>

    <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));


$(function() {
    $('.nav').bind('click', 'ul li a', function(event) {
        $.scrollTo(event.target.hash, 250);
    });
});

        </script>

<script>  
$('a[href*=#]:not([href=#])').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
    || location.hostname == this.hostname) {

  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  if (target.length) {
    $('html,body').animate({
      scrollTop: target.offset().top
    }, 1000);
    return false;
  }
}
}); 
</script>

</body>
  </html>