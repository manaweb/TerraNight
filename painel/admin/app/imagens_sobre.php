<? 
	define('ID_MODULO',99,true);
	include("../../../php/config/config.php");
	include("../includes/Config.php");
	foreach ($_POST as $campo => $valor) $$campo = processaString($valor);
	#print_r($_POST); exit;


	$Config = array(
		'arquivo'=>'imagens_sobre',
		'tabela'=>'imagens_historico',
		'titulo'=>'titulo',
		'id'=>'id',
		'urlfixo'=>'', 
		'pasta'=>'informacoes',
		'imagem'=>array(
			'x'=>1900, 'y'=>590, 'corte'=>0, 
			'mini'=>array(
				'x'=>100, 'y'=>100, 'corte'=>0
			)
		),
	);



	// -----------------------------------------------------------------------------------------------------------
	// Incluir ou alterar dados no banco de dados
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="dados") {


		# Dados
		$dados = array();
		$dados2 = array('arquivo' => array());


		# Arquivo
		$size = count($_FILES['imagem']['name']);
		$dados2['arquivo'][0] = processaArquivo('imagem',$Config,$_FILES,1,$i,'arquivo');
		if ($dados2['arquivo'][0] == false) { header("Location: ../sys/".$Config['arquivo'].".php?erro=".urlencode('Erro processando Imagem.'),true); exit; }

		
		
		# Executando 
		if ($$Config['id']>0) {
			
			# Apagando a Imagem se houver uma nova cadastrada
			if (strlen($dados['arquivo'])>0) db_apagaArquivo('arquivo',$Config,$$Config['id']);

			db_executa($Config['tabela'],$dados,'update', $Config['id'].'='.$$Config['id']);

		} else {
			$tmpDados = $dados2;
			$tmpVar = $tmpDados['arquivo'][0];
			$dados2['arquivo'] = $tmpVar;
			db_executa($Config['tabela'],$dados2);
			# Hist�rico
			cadHistorico(ID_MODULO,1,db_insert_id());
		}


		header("Location: ../sys/".$Config['arquivo'].".php?msg=".urlencode('Feito.').$Config['urlfixo'],true); exit;

	}







	// -----------------------------------------------------------------------------------------------------------
	// Excluir um registro e seus arquivos
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="excluir") {
		$id=(int)$_GET['id'];
		if ($id>0) {

			# Apagando os arquivos 
			db_apagaArquivo('arquivo',$Config,$id);
	
			# Excluindo do Bando de dados
			db_consulta("DELETE FROM ".$Config['tabela']." WHERE ".$Config['id']."=".$id);

			# Hist�rico
			cadHistorico(ID_MODULO,4,$id);

			header("Location: ../sys/".$Config['arquivo'].".php?msg=".urlencode('Exclu&iacute;do.').$Config['urlfixo'],true); exit;

		}
	}









	// -----------------------------------------------------------------------------------------------------------
	// Apaga v�rios itens de uma vez s�
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="excluir_massa") {
		if (is_array($check)) 
		foreach ($check as $id) {
			if ($id>0) {

				# Apagando os arquivos 
				db_apagaArquivo('arquivo',$Config,$id);
	
				# Excluindo do Bando de dados
				db_consulta("DELETE FROM ".$Config['tabela']." WHERE ".$Config['id']."=".$id);

				# Histórico
				cadHistorico(ID_MODULO,4,$id);

			}
		}
		header("Location: ../sys/".$Config['arquivo'].".php?msg=".urlencode('Feito').$Config['urlfixo'],true); exit;
	}






	// -----------------------------------------------------------------------------------------------------------
	// Alterando flags
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="flag") {
		list($valor) = db_dados("SELECT ".$_GET['flag']." FROM ".$Config['tabela']." WHERE ".$Config['id']."=".(int)$_GET['id']);
		if ($valor==1) $valor='0'; else $valor='1';
		
		# Hist�rico
		cadHistorico(ID_MODULO,3,$_GET['id']);

		db_executa($Config['tabela'],array($_GET['flag']=>$valor),'update', $Config['id'].'='.$_GET['id']);
		header("Location: ".urldecode($_GET['origem'])."?&msg=Atualizado".$Config['urlfixo'],true); exit;
	}






	// Se nada for feito...
	header("Location: ../sys/".$Config['arquivo'].".php?info=".urlencode('Nada feito').$Config['urlfixo'],true); exit;

?>