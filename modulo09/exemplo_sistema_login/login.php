<?php
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false){
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = MD5('$senha')";

	try{
		$pdo = new PDO("mysql:dbname=blog;host=localhost:3306", "root", "");
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
			$_SESSION['id'] = $dado['id'];
			header("location: index.php");
		}
	}catch(PDOException $e){

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Página de login</title>
</head>
<body>

<form method="post">
	<h2>Login</h2>
	<table>
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