<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?PHP
	
	/*
	comentário de várias linhas
	*/

	//comentário de uma única linha

	//variável tipo string
	$nome = "Athos";

	//variável tipo inteiro
	$idade = 90;

	//variável tipo float
	$nota = 7.5;

	//variável tipo boolean
	$ligado = true;

	//variável tipo array
	$grupos = array(
		"nome" => "Athos",
		"sobrenome" => "Francisco",
		"idade" => 90,
		"M"

 	);
	echo "".$grupos["nome"]." ".$grupos["sobrenome"];
	print_r($grupos);


	$produtos = array(
		0 => array(
			"nome" => "", 
			"quantidade" =>"",
			"info" => ""
		),
		1 => array(
			"nome" => "", 
			"quantidade" =>"",
			"info" => ""
		)
	);

	$produtos[] = array(
		"nome" => "", 
		"info" => "",
		"quantidade" => ""
	);

	print_r($produtos);
	?>
	</pre>
</body>
</html>