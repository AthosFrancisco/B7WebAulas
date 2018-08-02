<?php
session_start();

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', MD5('$senha'))";

	try{
		$pdo = new PDO("mysql:dbname=blog;host=localhost:3306", "root", "");
	}catch(PDOException $e){

	}

	$pdo->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Página de Cadas</title>
</head>
<body>

<form method="post">
	<h2>Cadastro</h2>
	<table>
		<tr>
			<td><label for="nome">Nome:</label></td>
			<td><input type="text" name="nome" id="nome" autofocus></td>
		</tr>
		<tr>
			<td><label for="email">E-mail:</label></td>
			<td><input type="email" name="email" id="email"></td>
		</tr>
		<tr>
			<td><label for="senha">Senha:</label></td>
			<td><input type="password" name="senha" id="senha"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Enviar"></td>
		</tr>
	</table>
</form>
</body>
</html>