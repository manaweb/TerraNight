<footer>
  <?php include_once("analyticstracking.php") ?>
          <div  id="section4" class="section">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                  <h1 class="text-center aldo">Contato</h1>
                  <hr>
    

                </div>
              </div>


               
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-12 col-xs-10 col-xs-offset-1 end">
                      <h1 class="gc"><b>Endereço:</b></h1>
                      <img class="marcador-footer" src="../img/marcador-footer.png">
                        <h4 class="gc">
                          <address><b>Rua</b> Juvenal Augusto nº386
                            <br> 
                             Bairro Centro - Terra Roxa, SP
                            <br> 
                             CEP 14745-000 
                          </address>
                        </h4>
                            
                      <h3 class="gc"><abbr title="Telefone"><i class="fa fa-phone"></i>&nbsp;<b>Telefone:</b></abbr>(017) 99724-5004</h3>
                              
                            
                          
                      <a class="gc email" href="mailto:contato@terranight.com.br">
                        <h4><i class="fa fa-envelope-o"></i>&nbsp;contato@terranight.com.br</h4>
                      </a>


                    </div>
               <br>
              <div class="col-lg-6 col-md-5 col-sm-12 col-xs-10 col-xs-offset-1 contatorodape">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <h4 class="text-center gc">Preencha o formulário ou entre em contato conosco.</h4>
                 </div>
                 <br>
            
                    <div class="alert alert-success contatoForm gc">
                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                      Dados enviados com sucesso, aguarde o nosso contato...
                  </div>    
                </div>
                  <form action="#" method="post" class="form" role="form" id="contatoForm">
                    <br>
                    
                    <div class="input-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input class="form-control" name="nome" placeholder="Nome Completo" type="text" required />
                     </div>
                     <div class="input-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                            <input class="form-control" name="email" placeholder="Seu Email" type="email" required />
                       </div>
                       <div class="input-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                              <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                              <input class="form-control" name="telefone" placeholder="Telefone,celular,etc..." type="text" required />
                         </div>
                        <div class="input-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                              <span class="input-group-addon glyphicon glyphicon-pencil"></span>
                            <textarea class="form-control" rows="6" name="texto" required></textarea>
                       </div>
                      <div class="input-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                          <button type="submit" class="btn-enviar center-block gc"></button>    
                       </div>
                  </div>
                </form>    
               </div>
            </div>
          </div>

            <script src="js/jquery-1.10.2.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>
            <script src="js/modern-business.js"></script>

            <script>
              $(function() {
                var login = ''+$('li.dropdown b').first().text()+'';

                if (login.indexOf('Login') < 0) {
                  $('#login-nav').replaceWith('<form action="logout.php"><button type="submit" class="btn btn-danger btn-block gc"><b>Sair</b></button></form>');
                }

                $('.alert-success,#loaderLogin,#loaderLogin2').hide();

                var data = new Date();
                for (i = 0;i < $('.faq-cat-tabs li a').length;i++)
                  if ($('.faq-cat-tabs li a').eq(i).attr('href').indexOf(''+data.getMonth()+''))
                    $('.faq-cat-tabs li').removeClass('active').eq(i).addClass('active');

                var url = window.location.toString();

                if (url.indexOf('section3') >= 0) {
                  $('html,body').animate({
                    scrollTop: $('#section3').offset().top
                  },1000);
                }
                else if (url.indexOf('section4') >= 0) {
                  $('html,body').animate({
                    scrollTop: $('#section4').offset().top
                  },1000);
                }

                $('.faq-cat-tabs li a').click(function() {
                  var index = $(this).index('.faq-cat-tabs li a');
                  $.ajax({
                    url: 'agenda.php?mes='+index,
                    dataType: 'html',
                    beforeSend: function() {
                      $('#contentDarkTerraNiggaNight').html('');
                    },
                    success: function(data) {
                      $('#contentDarkTerraNiggaNight').html(data);
                       if ($('#contentDarkTerraNiggaNight span').text() != '')
                          $('.agenda li').slice(1).hide();
                    }
                  });

                });
              });

            $('#pog').click(function() {
              $('html,body').animate({
                scrollTop: $('#section3').offset().top
              },1000);
            });
            $('#contatus').click(function() {
              $('html,body').animate({
                scrollTop: $('#section4').offset().top
              },1000);
            });
  
              $('#login-nav').submit(function() {
                var status = '';
                $.ajax({
                    url: 'login.php',
                    type: 'POST',
                    dataType: 'html',
                    data: $('#login-nav').serialize(),
                    async: false,
                    beforeSend: function() {
                      $('#loaderLogin').fadeIn('slow');
                    },
                    success: function(data) {
                     status = data;
                     $('#loaderLogin').fadeOut('slow');
                    }
                  });

               if (status != undefined && status == 'Error')  {
                  $('#login-nav .alert').fadeIn('slow');
                }else {
                  $('#login-nav .alert').fadeOut('slow');
                  $('li.dropdown b').text(status);
                  $('li.dropdown').removeClass('open');
                  $('#login-nav').replaceWith('<form action="logout.php"><button type="submit" class="btn btn-danger btn-block gc"><b>Sair</b></button></form>');
                  location.reload();
                }
                return false;
              });

              $('#cadastroForm').submit(function() {
                $.ajax({
                    url: 'finalizar.php?type=cadastro',
                    type: 'POST',
                    dataType: 'html',
                    data: $('#cadastroForm').serialize(),
                    success: function(data) {
                     if (data != undefined && data != '')
                      $('#cadastroForm .alert').removeClass('alert-success').addClass('alert-danger').text(data);
                    else
                      $('#cadastroForm .alert').removeClass('alert-danger').addClass('alert-success').text('Seu cadastro foi efetuado com sucesso!');
                     $('#cadastroForm .alert').fadeIn('slow');
                    }
                  });
                return false;
              });

              $('#contatoForm').submit(function() {
                $.ajax({
                    url: 'finalizar.php?type=contato',
                    type: 'POST',
                    dataType: 'html',
                    data: $('#contatoForm').serialize(),
                    success: function() {
                      $('.contatoForm').fadeIn('slow',function() {
                        setTimeout(function() {
                          $('.contatoForm').fadeOut('slow');
                        },5000);
                      });
                    }
                  });
                return false;
              });

            </script>
     
        </footer>