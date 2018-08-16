<?php
include_once 'conexao.php';

if(isset($_GET['codigo'])){
	$codigoValidacao = addslashes($_GET['codigo']);

	$sql = "SELECT * FROM usuarios WHERE codigo = '$codigoValidacao'";

	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		$contador = intval($sql->fetch()['contador']);
		if($contador >= 5){
			header("location: login.php");
		}else{
			if(isset($_POST['email']) && isset($_POST['senha'])){

				if(!empty($_POST['email']) && !empty($_POST['senha'])){

					$email = $_POST['email'];
					$senha = md5($_POST['senha']);
					$codigo = md5(rand(0,999).time());

					$contador++;
					$sql = "INSERT INTO usuarios SET email = '$email', senha = '$senha', codigo = '$codigo'; UPDATE usuarios SET contador = '$contador' WHERE codigo = '$codigoValidacao';";
					$sql = $pdo->query($sql);

					$id = $pdo->lastInsertId();

					$sql = "SELECT * FROM usuarios WHERE id = $id";
					$sql = $pdo->query($sql);

					if($sql->rowCount() > 0){
						$sql = $sql->fetch();
						$_SESSION['email'] = $sql['email'];
						$_SESSION['codigo'] = $sql['codigo'];

						header("location: index.php");
					}
				}
			}
			
		}
	}else{
		header("location: login.php");
	}
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1>Cadastro</h1>
<form method="POST">
	<table>
		<tr>
			<td>Email:</td>
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