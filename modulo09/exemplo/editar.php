<?php
	
	require 'config.php';

	$id = 0;
	$dado;

	if(isset($_GET['id']) && empty($_GET['id']) == false){

		id = addslashes($_GET['id']);

		$sql = "SELECT * FROM usuarios WHERE id = '$id'";

		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
		}

	}else{
		header("Location: index.php");
	}
?>
