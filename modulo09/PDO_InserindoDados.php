<?php

	$dsn = "mysql:dbname=blog;host=localhost:3306";
	$dbuser = "root";
	$dbpass = "";

	//inserir

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

		echo "Conexão estabelecida com sucesso</br>";

		$sql = "INSERT INTO usuarios SET nome = 'Testador2', email = 'teste2@gmail.com', senha = MD5('123')";
		$sql = $pdo->query($sql);

		echo "usuário inserido: ".$pdo->lastInsertId();

	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}

	
?>