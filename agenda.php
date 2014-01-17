<?php

$mes = $_GET['mes']+1;
$retorno = '';

if (isset($mes)) {
    include("php/config/config.php");
      include("painel/includes/BancoDeDados.php");
      $conexao = db_conectar();
      $query = mysql_query("SELECT descricao, titulo, DAY(datahora) as dia, MONTH(datahora) as mes FROM tbprogramacao WHERE MONTH(datahora) = '$mes' ORDER BY datahora ASC");
      if (mysql_num_rows($query) <= 0) {
        $retorno .= '
          <span>Não há eventos cadastrados nesse mês</span>
        <div id="faq-cat-'.$i.'-sub-'.$i.'" class="panel-collapse collapse">
              <div class="panel-body">
              <span><b class="gc">Não há eventos cadastrados nesse mês</b></span>
              </div>   
         </div>';
      }else {

        for ($i = $mes;$dadosAgenda = mysql_fetch_assoc($query);$i++) {
          $retorno .= '
            <div class="panel-heading">
              <a data-toggle="collapse" data-parent="#accordion-cat-'.$i.'" href="#faq-cat-'.$i.'-sub-'.$i.'">
                  <div class="pull-left">
                    <p class="dia gc" style="color:#000000 !important;">
                      '.((int)$dadosAgenda['dia'] < 10 ? "0{$dadosAgenda['dia']}" : $dadosAgenda['dia']).'
                    </p>
                    <p class="mes gc" style="color:#000000 !important;">
                      '.((int)$dadosAgenda['mes'] < 10 ? "0{$dadosAgenda['mes']}" : $dadosAgenda['mes']).'
                    </p>
                    <img class="img-responsive" src="../img/ovo-data.png">
                  </div>
                  <div class="agendaposition">
                    <h3 class="gc">
                     <b>'.utf8_encode($dadosAgenda['titulo']).'</b>
                      <br>
                      <small> 
                        <b>+ informações</b>
                      </small>
                    </h3>
                  </div>
                </a>
            </div>     
          <div id="faq-cat-'.$i.'-sub-'.$i.'" class="panel-collapse collapse">
                <div class="panel-body gc">
                '.utf8_encode($dadosAgenda['descricao']).'
                </div>   
           </div>                                  
              ';
          }
       }
    $retorno .= '</div>';
}

echo $retorno;

?>