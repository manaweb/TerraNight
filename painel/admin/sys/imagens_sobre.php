<? 
	define('ID_MODULO',99,true);
	include('../includes/Config.php');
	include('../includes/Topo.php');
	

	$Config = array(
		'arquivo'=>'imagens_sobre',
		'tabela'=>'imagens_historico',
		'titulo'=>'imagens',
		'id'=>'id',
		'urlfixo'=>'', 
		'pasta'=>'informacoes'
	);

?>
<?
include('../includes/Mensagem.php');
?>
                	<div class="conthead">
                        <h2>"Quem Somos"</h2>
                    </div>
<div id="conteudo">

<br />
<br />

<?

 


	# Montando os campos
	$campos = array(
		#	0=>Tipo			1=>Título				2=>Fonte			3=>Url
		array('imagem',		'Imagem',				'arquivo',			''),

	);


	# Consulta SQL
	$SQL = "SELECT * FROM imagens_historico ORDER BY id DESC";


	# Processando os dados
	$Lista = new Consulta($SQL,20,$PGATUAL);
	while ($linha = db_lista($Lista->consulta)) {
		$dados[] = $linha;
	}


	# Listando
	echo adminLista($campos,$dados,array('excluir'),$Config,false);

?>
</div>
<? include('../includes/Rodape.php'); ?>