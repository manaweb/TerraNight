<?php
include("php/config/config.php");
include("painel/includes/BancoDeDados.php");
require 'checkout/actioncheckout.class.php';

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {
	$lmin = 'abcdefghijklmnopqrstuvwxyz';
	$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$num = '1234567890';
	$simb = '!@#$%*-';
	$retorno = '';
	$caracteres = '';

	$caracteres .= $lmin;
	if ($maiusculas) $caracteres .= $lmai;
	if ($numeros) $caracteres .= $num;
	if ($simbolos) $caracteres .= $simb;

	$len = strlen($caracteres);
	for ($n = 1; $n <= $tamanho; $n++) {
		$rand = mt_rand(1, $len);
		$retorno .= $caracteres[$rand-1];
	}
	return $retorno;
}


$email = addslashes($_POST['email']);
$conexao = db_conectar();
$senha = geraSenha();
$query = mysql_query("UPDATE tbclientes SET senha = '".md5($senha)."' WHERE email = '$email'");

if ($senha != NULL && !empty($senha)) {
	$headers = "";
	$msg = "<html>
				<body>
					<h1>Recuperar Senha</h1>
					<b>Email:</b> $email<br/>
					<b>Sua nova senha é:</b> $senha<br/>
				</body>
			</html>";

	$header .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: <$email>\r\n";

	$opts = array(
			
			'assunto' => 'Sua senha foi alterada',
			'remetente' => 'contato@terranight.com.br',
			'nomeRemetente' => 'Terra Night',
			'destino' => array('Cliente' => $email),
			'corpo' => $msg
		
		);
	$Act = new ActionCheckout;
	$Act->sendConfirm($opts);
}else echo 'Este e-mail ainda não está cadastrado ou está incorreto';
mysql_close($conexao);