<?php

session_start();

include("php/config/config.php");
include("painel/includes/BancoDeDados.php");
$conexao = db_conectar();

extract($_POST);

$loginEmail = addslashes($loginEmail);
$loginPassword = md5($loginPassword);

$query = mysql_query("SELECT primeironome,email,senha FROM tbclientes WHERE email = '$loginEmail' AND senha = '$loginPassword'");

if (mysql_num_rows($query) < 1) {
	$_SESSION['isLogged'] = 0;
	echo 'Error';
	return false;
}

$result = mysql_fetch_assoc($query);
$_SESSION['isLogged'] = 1;
$_SESSION['loginName'] = $result['primeironome'];
echo $result['primeironome'];