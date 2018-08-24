<?php
require_once 'config.php';

if(!empty($_POST['email'])){
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = MD5(:senha)";

	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email", $email);
	$sql->bindValue(":senha", $senha);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();

		$_SESSION['mmnlogin'] = $sql['id'];

		header("location: index.php");
		exit;
	}else{
		echo "Login ou senha incorreto";
	}
}
?>

<form method="POST">
	<table>
		<tr>
			<td><label for="email">Email</label></td>
			<td><input type="email" id="email" name="email"></td>
		</tr>
		<tr>
			<td><label for="senha">Email</label></td>
			<td><input type="password" name="senha" id="senha"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="enviar"></td>
		</tr>
	</table>
</form>