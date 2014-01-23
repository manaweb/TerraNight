<?php
	include("../../../php/config/config.php");
	include("../includes/Config.php");
	$imagem = $_GET['imagem'];
	$campo = $_GET['campo'];
	$id = $_GET['id'];
	@unlink("../../arquivos/informacoes/".$imagem);
	@unlink("../../arquivos/informacoes/_miniaturas/".$imagem);
	if(mysql_query("update historico set imagem = '' where id = $id")){
		echo "true";
	}else{
		echo "false";
	}

?>