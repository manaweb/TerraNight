<? 
	define('ID_MODULO',9,true);
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


	if ($_GET['ID']>0) $dados = db_dados("SELECT *, DATE_FORMAT(datahora,'%d/%m/%Y %H:%i') as data FROM ".$Config['tabela']." WHERE ".$Config['id']."=".(int)$_GET['ID']." LIMIT 1;");

?>
<?
include('../includes/Mensagem.php');
$ondeestou = 'Nova Programa&ccedil;&atilde;o';
?>
                	<div class="conthead">
                        <h2>Adicionar Programa&ccedil;&atilde;o</h2>
                    </div>
<div id="conteudo">
<?

	include('../includes/Mensagem.php');
	
	if ($dados['id_galeria']>0) $dados['imagem'] = $dados['codigo'].'/capa.jpg';
	if (empty($dados['data'])) $dados['data']=date('d/m/Y');
	if ($dados['flag_status']=='') $dados['flag_status']='1';

	# Montando os Dados
	$campos = array(
		#	0=>Tipo			1=>Titulo		2=>Nome Campo		3=>Tamanho(px)	4=>CampoExtra		5=>Comentário								6=>Atributos
		array('text',		'T&iacutetulo',		'titulo',			'500',			'',					'',											''),
		array('text',		'Descri&ccedil;&atilde;o',		'descricao',			'250',			'',					'',											''),
		array('data',	'Data/Hora',			'data',				'100',			'',					'',											''),
	);


	# Exibindo os campos
	echo adminCampos($campos,$Config,$dados);

?>
</div>
<?
	include('../includes/Rodape.php');

?>