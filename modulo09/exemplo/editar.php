<?php

	require 'config.php';

	$id = 0;
	$dado;

	if(isset($_GET['id']) && empty($_GET['id']) == false){

		$id = addslashes($_GET['id']);
	}

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "UPDATE usuarios SET nome = '$nome', email = '$email'";

		if(empty($_POST['senha']) == false){
			$sql = $sql.", senha = '$senha'";
		}

		$sql = $sql." WHERE id = $id;";

		$pdo->query($sql);

		header("Location: index.php");
	}

	

	$sql = "SELECT * FROM usuarios WHERE id = $id;";

	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		$dado = $sql->fetch();
	}else{
		header("Location: index.php");
	}
?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $dado['nome']?>" /><br/><br/>
	E-mail:<br/>
	<input type="text" name="email" value="<?php echo $dado['email']?>"/><br/><br/>
	Senha:<br/>
	<input type="password" name="senha" value="" /><br/><br/>
	<br/>
	<input type="submit" value="Enviar" />
</form>
