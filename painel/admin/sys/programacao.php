<? 
	define('ID_MODULO',86,true);
	header('Content-Type: text/html;charset=ISO-8859-1');
	include("../../../php/config/config.php");
	include('../includes/Config.php');
	include('../includes/Topo.php');
	

	$Config = array(
		'arquivo'=>'programacao',
		'tabela'=>'tbprogramacao',
		'titulo'=>'titulo',
		'id'=>'id',
		'urlfixo'=>'', 
		'pasta'=>'',
	);

?>
<?
include('../includes/Mensagem.php');
?>
                	<div class="conthead">
                        <h2>Programa&ccedil;&atilde;o</h2>
                    </div>
<div id="conteudo">
<a id="btnalt"  href="programacao_dados.php"><img src="../img/add.png" align="absmiddle" /> Adicionar Programa&ccedil;&atilde;o</a>
<br />
<br />
<?



	# Montando os campos
	$campos = array(
		array('texto',		'TITULO',				'titulo',								''),
		//array('texto',		'PRE&Ccedil;O',					'preco',							''),
		array('resumo',		'DESCRI&Ccedil;&Atilde;O',		'descricao',						''),
		array('texto',		'Data',						'data1',							''),
	);


	# Consulta SQL
	$SQL = "SELECT *, DATE_FORMAT(datahora,'%d/%m/%Y %H:%i') as data1 FROM tbprogramacao  ORDER BY id DESC";

	# Processando os dados
	$total = mysql_num_rows(mysql_query($SQL));
	$Lista = new Consulta($SQL,$total,$PGATUAL);
	while ($linha = db_lista($Lista->consulta)) {
		$dados[] = $linha;
	}


	# Listando
	echo adminLista($campos,$dados,array('excluir','editar'),$Config,true);



	# PaginaÃ§Ã£o
	//echo '<div class="paginacao">'.$Lista->geraPaginacao().'</div>';









?>
</div>
<? include('../includes/Rodape.php'); ?>