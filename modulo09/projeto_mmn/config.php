<?php
global $pdo;
try{
	//$pdo = new PDO("mysql:dbname=projeto_mmn;host=localhost", "root", "");
        $pdo = new PDO("mysql:dbname=projeto_mmn;host=localhost", "root", "vagrant");
}catch(PDOException $e){
	echo $e->getMessage();
}

session_start();

$limite = 4;

$patente = array(
	
);

?>