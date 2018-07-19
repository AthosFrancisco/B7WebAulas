<?php
	
	$x = 0;

	while ($x < 10) {
		
		echo "X é igual a $x <br/>";
		$x++;
	}

	echo "<br/>";

	//FOR
	for($i = 0; $i < 10; $i++){
		echo "o nosso i é ".$i."<br/>";
	}

	//$nomes = array("Athos", "Rubenilson", "Gabriel", "Rafael");

	$nomes = array(
		array("nome" =>"Athos", "idade"=>90),
		array("nome" =>"Rubens", "idade"=>50),
		array("nome" =>"Gabriel", "idade"=>100),
		array("nome" =>"Rafael", "idade"=>90)
	);

	echo "<br/>";
	//FOREAcH
	foreach ($nomes as $aluno) {
		echo "Aluno: " .$aluno["nome"]. " - idade: ".$aluno["idade"]."<br/>";
	}

	$alunos = array(
		"nome" => "Athos",
		"idade" => 50,
		"estado" => "PE",
		"país" => "Brasil"
	);

	echo "<br/>";

	foreach ($alunos as $chave => $dado) {
		echo $chave." = ".$dado."<br/>";
	}
?>