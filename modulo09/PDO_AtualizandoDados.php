<?php

	$dsn = "mysql:dbname=blog;host=localhost:3306";
	$dbuser = "root";
	$dbpass = "";

	//inserir

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

		echo "Conexão estabelecida com sucesso</br>";

		$sql = "UPDATE usuarios SET email = 'athosfrancisco@gmail.com' WHERE email = 'athos@gmail.com'";

		$pdo->query($sql);

	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}

	
?>