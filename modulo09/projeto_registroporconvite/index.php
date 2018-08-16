<?php

include_once 'conexao.php';

if(isset($_SESSION['email']) && isset($_SESSION['codigo'])){
	$email = $_SESSION['email'];
	$codigo = $_SESSION['codigo'];
}else{
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Index</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1>Bem vindo : <?php echo $email;?></h1>
<h2>Link para cadastro: <?php echo 'http://localhost/B7WebAulas/modulo09/projeto_registroporconvite/cadastro.php?codigo='.$codigo;?></h2>
</body>
</html>