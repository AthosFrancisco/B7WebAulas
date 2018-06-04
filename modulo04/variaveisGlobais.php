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

	echo "Seu nome é: ".$nome;

	define("URL", "https://www.google.com");

	echo "</br>Meu site é ".URL;
	?>
	</pre>


</body>
</html>
