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
		'pasta'=>'informacoes',
	);


	if ($_GET['ID']>0) $dados = db_dados("SELECT * FROM ".$Config['tabela']." WHERE ".$Config['id']."=".(int)$_GET['ID']." LIMIT 1;");

?>
<?
include('../includes/Mensagem.php');
$ondeestou = 'videos';
?>
 <div class="conthead">
                        <h2>Editar Texto "Informa&ccedil;&otilde;es"</h2>
                    </div>
<div id="conteudo">
<?
 


	# Montando os Dados
	$campos = array(
		#	0=>Tipo			1=>Titulo					2=>Nome Campo				3=>Tamanho(px)		4=>CampoExtra		5=>Comentário								6=>Atributos
		array('file',		'Imagem(ns)',					'imagem[]',					'500',				'',					'',											'multiple="multiple"'),
	);


	# Exibindo os campos
	echo adminCampos($campos,$Config,$dados);






?>
</div>
<?
	include('../includes/Rodape.php');
?>