<?php
	$dsn = "mysql:dbname=blog;host=localhost:3306";
	$dbusuario = "root";
	$dbsenha = "";

	try{

		$pdo = new PDO($dsn, $dbusuario, $dbsenha);

	}catch(PDOException $e){
		echo "Falhou a conexão: ".$e->getMessage();
	}
?>