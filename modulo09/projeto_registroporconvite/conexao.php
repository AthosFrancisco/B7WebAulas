<?php
session_start();

try{
	$pdo = new PDO("mysql:dbname=projeto_registroporconvite;host=localhost:3306", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}
?>