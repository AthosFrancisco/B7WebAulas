<?php
include_once 'conexao.php';

if(isset($_POST['email']) && isset($_POST['senha'])){
	if(!empty($_POST['email']) && !empty($_POST['senha'])){
		$email = addslashes($_POST['email']);
		$senha = md5($_POST['senha']);

		$sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");

		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			$_SESSION['email'] = $sql['email'];
			$_SESSION['codigo'] = $sql['codigo'];

			header("location: index.php");
		}
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1>Login</h1>
<form method="POST">
	<table>
		<tr>
			<td>Login:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input type="password" name="senha"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Enviar"></td>
		</tr>
	</table>
</form>
</body>
</html>
