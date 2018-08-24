<?php
try{
	$pdo = new PDO("mysql:dbname=projeto_mmn;host=localhost", "root", "");
}catch(PDOException $e){
	echo $e->getMessage();
}

session_start();

?>