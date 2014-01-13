<?php

require 'checkout/actioncheckout.class.php';

$type = $_GET['type'];

extract($_POST);

if (isset($type)) {
	if($type == 'contato') {
		$headers = "";
		$msg = "<html>
					<body>
						<h1>Formulário de Cadastro</h1>
						<b>Nome:</b> $nome<br/>
						<b>Email:</b> $email<br/>
						<b>Telefone:</b> $telefone<br/>
						<b>Mensagem:</b> $texto
					</body>
				</html>";
		
		$header .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: Terra Night <contato@terranight.com.br>\r\n";

		$opts = array(
				
				'assunto' => 'Formulário de Contato',
				'remetente' => 'contato@terranight.com.br',
				'nomeRemetente' => 'Terra Night',
				'destino' => array('Cliente' => 'contato@terranight.com.br'),
				'corpo' => $msg
			
			);
		$Act = new ActionCheckout;
		$Act->sendConfirm($opts);
	} else if($type == 'cadastro') {
		include("php/config/config.php");
	    include("painel/includes/BancoDeDados.php");
	    $conexao = db_conectar();
	    $primeironome = addslashes($primeironome);
	    $tel = addslashes($tel);
	    $email = addslashes($email);
		$senha = md5($senha);
		$query = mysql_query("SELECT email FROM tbclientes WHERE email = '$email'");
		if (mysql_num_rows($query) > 0) {
			echo 'E-mail já cadastrado!';
			return false;
		}
		$query = mysql_query("INSERT INTO tbclientes (email,primeironome,telefone,senha) VALUES ('$email','$primeironome','$tel','$senha')");
	}
}