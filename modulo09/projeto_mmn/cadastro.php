<?php
require_once 'config.php';

if(!empty($_POST['nome']) && !empty($_POST['email'])){
	$idPai = $_SESSION['mmnlogin'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($email);

	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
	$sql->bindValue(":email", $email);
	$sql->execute();

	if($sql->rowCount() == 0){
		$sql = $pdo->prepare("INSERT INTO usuarios (id_pai, nome, email, senha) VALUES (:idPai, :nome, :email, :senha)");
		$sql->bindValue(":idPai", $idPai);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();

		header("location: index.php");
		exit;
	}
	else{
		echo "O usuário para este e-mail já existe";
	}
}
?>

<h1>Cadastrar Novo Usuário</h1>

<form method="POST">
	<table>
		<tr>
			<td><label for="nome">Nome:</label></td>
			<td><input type="text" name="nome" id="nome"></td>
		</tr>
		<tr>
			<td><label for="email">E-mail:</label></td>
			<td><input type="text" name="email" id="email"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>