      <?php
        include("php/config/config.php");
        include("painel/includes/BancoDeDados.php");
        $conexao = db_conectar();
      ?>
<?php include_once("analyticstracking.php") ?>
      <!--[if lt IE 7]>
        <p class="chromeframe">
          Você está usando um navegador <strong>desatualizado.</strong>
          Por favor
          <a href="http://browsehappy.com/">atualize seu navegador</a>
          ou
          <a href="http://www.google.com/chromeframe/?redirect=true">ative o Google Chrome Frame</ a>
          para obter uma experiência completa do site.
        </ p>
        <![endif]-->
      <nav class="navbar navbar-inverse navbar-fixed-top menu" role="navigation">
          <div class="container col-lg-6 col-lg-offset-3">
            <div id="section1" class="navbar-header">
            <div class="row">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
       
               <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a href="index.php">
                <img class="img-responsive" src="img/logo-menu.fw.png"/>
              </a>
              </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->


            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="index.php" class="gc">home</a>
                </li>
                <li>
                  <a href="fotos.php" class="gc">informações</a>
                </li>
                <li>
                  <a href="fotos.php" class="gc">fotos</a>
                </li>
                <li>
                  <a href="index.php#section3" class="gc" id="pog">Programação</a>
                </li>
                <li>
                  <a href="#section4" class="gc" id="contatus">Contato</a>
                </li>

               <li class="dropdown">
                  <a href="#" class="dropdown-toggle gc" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span> <b> <?=(!isset($_SESSION['loginName']) ? 'Login' : $_SESSION['loginName'])?></b>
                  </a>
                   <ul class="dropdown-menu sessao" style="padding: 16px; min-width: 265px; opacity: 0.95;">
                      <li>
                         <div class="row">
                            <div class="col-md-12">
                               <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                <div>
                                  <div class="alert alert-danger" style="display: none;">
                                    <a href="#" class="close gc" data-dismiss="alert">&times;</a>
                                    Usuário e/ou senha inválidos
                                </div>    
                                  <div class="form-group">
                                     <label class="sr-only gc" for="exampleInputEmail2">Email</label>
                                     <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Digite seu email..." name="loginEmail" required>
                                  </div>
                                  <div class="form-group">
                                     <label class="sr-only gc" for="exampleInputPassword2">Senha</label>
                                     <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Digite sua senha..." name="loginPassword" required>
                                  </div>
                                  <div class="form-group" id="loaderLogin">
                                     <img src="img/loading.gif" class="img-responsive gc center-block" style="width: 32px">
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-success btn-block gc">Entrar</button>
                                  </div>
                                    
                                  <div><!-- Button trigger modal -->
                                    <button class="btn btn-primary btn-lg gc" data-toggle="modal" data-target="#myModalCad">Cadastre-se</button>
                                  </div>  
                                  <p class="gc text-center"> Caso tenha perdido sua senha, <a href="recuperarsenha.php">clique aqui.</a></p>
                               </form>
                            </div>
                         </div>
                      </li>
                   </ul>
                </li>
              </ul>
            </div>         <!-- /.navbar-collapse -->
          </div>          <!-- /.container --> 
        </nav>

        <div class="clearfix"></div>

        <div class="modal fade" id="myModalCad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">        <!-- Modal -->
          <div class="modal-dialog">
            <div class="modal-content cadastro">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title center-block gc" id="myModalLabel">Cadastro</h2>
              </div>
                   <div class="modal-body">
               <div class="row">
                 <div class="col-md-12 col-lg-12"> 
                  <p class="gc text-center">
                    Faça já seu cadastro e tenha acesso exclusivo as fotos, e ainda receba as informações, promoções em primeira mão. Preencha corretamente para ter acesso completo às informações.
                    </p>
                </div>
                  <div class="col-md-6 col-lg-6">
                      <form action="" method="post" class="form" role="form" id="cadastroForm">
                      <div>
                        <div class="alert alert-success">
                          <a href="#" class="close gc" data-dismiss="alert">&times;</a>
                          Seu cadastro foi efetuado com sucesso!
                      </div>    
                    </div>
                      <input class="form-control" name="primeironome" placeholder="Seu nome" type="text" required autofocus />
                      <br />
                      <input class="form-control" name="tel" placeholder="Seu telefone" type="tel" required />
                      <br />
                      <input class="form-control" name="email" placeholder="Seu email" type="email" required />
                      <br />
                       <input class="form-control" name="senha" placeholder="Sua senha" type="password" required />
                      <br />
                      <button class="btn btn-lg btn-success btn-block gc" type="submit">
                          Finalizar Cadastro</button>
                      </form>
                      <br>
                  </div>
               
                  <div class="col-md-6 col-lg-6">
                   <img class="img-responsive center-block" src="../img/logo-ovo.png">
                  </div>
              </div>
          </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>
      <!-- <div class="container">
          <div class="row">
            <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-3 col-xs-2 col-xs-offset-2">

              <div class="terranight-lg visible-lg hidden-md hidden-sm hidden-xs" >
                <img src="img/logo-tranp.fw.png" class="img-responsive"  alt="..."/>
              </div>
              <div class="terranight-md hidden-lg visible-md hidden-sm hidden-xs" >
                <img src="img/logo-tranp.fw.png" class="img-responsive"  alt="..."/>
              </div>
              <div class="terranight-sm hidden-lg hidden-md visible-sm hidden-xs" >
                <img src="img/logo-tranp.fw.png" class="img-responsive"  alt="..."/>
              </div>
              <div class="terranight-xs hidden-lg hidden-md hidden-sm visible-xs" >
                <img src="img/logo-tranp.fw.png" class="img-responsive"  alt="..."/>
              </div>

            </div>
          </div>
        </div>-->
<BR>
<div id="section1" class="section"> 
  <div class="col-lg-6 col-lg-offset-3 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">

    <div class="cycle-slideshow" data-cycle-fx="scrollHorz" 
                                 data-cycle-timeout="4000" 
                                 data-cycle-slides=" > a" 
                                 data-cycle-swipe= "true"
                                 data-cycle-pager=".cycle-pager">
        <!-- prev/next links -->
       <?php
            $size = 0;
            $sqlBanner = "select * from tbpublicidade";
            $result = mysql_query($sqlBanner);
            while($dadosBanner = mysql_fetch_assoc($result)){
            ?>
              <a <?=$link?> title="<?=$dadosBanner['titulo']?>">
                <div class="img-responsive">
                  <img src="painel/arquivos/banner/<?=$dadosBanner['arquivo']?>">
                </div>
              </a>
       <?php } ?>
    </div>
    <div class="cycle-pager"></div>
  </div>
</div>
