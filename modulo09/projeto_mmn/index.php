<?php
require_once 'config.php';

if(empty($_SESSION['mmnlogin'])){
	header("location: login.php");
	exit;
}else{
	$id = $_SESSION['mmnlogin'];

	$sql = "SELECT nome FROM usuarios WHERE id = :id;";

	$sql = $pdo->prepare($sql);
	$sql->bindValue(":id", $id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$nome = $sql['nome'];
	}else{
		header("location: login.php");
		exit;
	}
}
?>

<h1>Bem vindo <?php echo $nome;?></h1>