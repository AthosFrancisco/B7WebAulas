<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		pre{
			font-family: Times New Roman;
		}
	</style>
</head>
<body>
	<pre>
	<?php
	//print_r($_SERVER);

	$nome = $_GET["nome"];
	$idade = 10;

	echo "Seu nome é: ".$nome;

	define("URL", "https://www.google.com");

	echo "</br>Meu site é ".URL;

	$nome = "Bonieky";
	echo "$nome".$nome.'oi';

	echo "<br/>";

	if($nome == "Bonieky" && $idade == 10){
		echo "meu nome está correto";
	}else{
		echo "meu nome está errado";
	}


	?>
	</pre>


</body>
</html>
