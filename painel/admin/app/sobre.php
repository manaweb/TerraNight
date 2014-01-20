<? 
	define('ID_MODULO',0,true);
	include("../includes/Config.php");
	foreach ($_POST as $campo => $valor) $$campo = processaString($valor);
	
	$Config = array(
		'arquivo'=>'sobre',
		'tabela'=>'historico',
		'titulo'=>'sobre',
		'id'=>'id',
		'urlfixo'=>'', 
		'pasta'=>'informacoes',

	);




	// -----------------------------------------------------------------------------------------------------------
	// Incluir ou alterar dados no banco de dados
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="dados") {


		# Testes
		$Erros='';
		if (strlen($texto) < 2) $Erros .= "Por favor, insira o texto da p&aacute;gina Quem Somos";


		# Se houver erro, SAI
		if (strlen($Erros)) { header('Location: ../sys/'.$Config['arquivo'].'_dados.php?ID='.$$cnf['id'].$Config['urlfixo'].'&erro='.urlencode("<b>Preencha os campos a seguir corretamente:</b>".$Erros),true); exit; }


		# Dados
		$dados = array('texto'=>$texto);

		if (!empty($_FILES['imagem']['name'])) {
			$dados['imagem'] = processaArquivo('imagem',$Config,$_FILES,1,'imagem');
			if ($dados['imagem'] == false) { header("Location: ../sys/".$Config2['arquivo'].".php?erro=".urlencode('Erro processando Imagem.'),true); exit; }
		}

		if ($$Config['id']>0) {
			# Apagando a Imagem se houver uma nova cadastrada
			if (strlen($dados["foto$i"])>0) {
				db_apagaArquivo("imagem",$Config,$$Config['id']);
			}
			db_executa($Config['tabela'],$dados,'update', $Config['id'].'='.$$Config['id']);

		} else {
			db_executa($Config['tabela'],$dados);

			# Hist�rico
			cadHistorico(ID_MODULO,1,db_insert_id());
		}



		# Executando 
		if ($$Config['id']>0) {


			db_executa($Config['tabela'],$dados,'update', $Config['id'].'='.$$Config['id']);

		} else {

			$dados['id_categoria']=$_SESSION['Admin']['id_categoria'];
			db_executa($Config['tabela'],$dados);

		}


		header("Location: ../sys/".$Config['arquivo'].".php?msg=".urlencode('Opera&ccedil;&atilde;o efetuada com sucesso!.'),true); exit;

	}












	// -----------------------------------------------------------------------------------------------------------
	// Excluir um registro e seus arquivos
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="excluir") {
		$id=(int)$_GET['id'];
		if ($id>0) {


			#Excluindo do Banco de dados
			db_consulta("DELETE FROM ".$Config['tabela']." WHERE ".$Config['id']."=".$id);
			header("Location: ../sys/".$Config['arquivo'].".php?msg=".urlencode('Exclu&iacute;do com sucesso.'),true); exit;

		}
	}






	// -----------------------------------------------------------------------------------------------------------
	// Apaga v�rios itens de uma vez s�
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="excluir_massa") {
	
		if (is_array($check)) 
		foreach ($check as $id) {
			if ($id>0) {

				# Excluindo do Bando de dados
				db_consulta("DELETE FROM ".$Config['tabela']." WHERE ".$Config['id']."=".$id);

				# Hist�rico
				cadHistorico(ID_MODULO,4,$id);

			}
		}
		header("Location: ../sys/".$Config['arquivo'].".php?msg=".urlencode('Opera��o efetuada com sucesso!').$Config['urlfixo'],true); exit;
	}












	// -----------------------------------------------------------------------------------------------------------
	// Alterando flags
	// -----------------------------------------------------------------------------------------------------------
	if ($_GET['faz']=="flag") {
		list($valor) = db_dados("SELECT ".$_GET['flag']." FROM ".$Config['tabela']." WHERE ".$Config['id']."=".(int)$_GET['id']);
		if ($valor==1) $valor='0'; else $valor='1';
		
		db_executa($Config['tabela'],array($_GET['flag']=>$valor),'update', $Config['id'].'='.$_GET['id']);
		header("Location: ".urldecode($_GET['origem'])."?&msg=Atualizado",true); exit;
	}






	// Se nada for feito...
	header("Location: ../sys/".$Config['arquivo'].".php?info=".urlencode('Ocorreu um erro durante o processo, por favor tente novamente.'),true); exit;
	
?>