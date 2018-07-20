<?php
	
	function somarNumero($x, $y){
		$conta = $x+$y;

		return $conta;
	}

	$resultado = somarNumero(10, 20);

	echo $resultado."<br/>";


	//funcoes de tempo
	$data = date("d-m-o \à\s h:i:s a");

	echo $data. "<br/>";

	//função time() retornas a quantidade de segundos passados desde o 1/1/1970 às 00:00:00

	//funções relacionadas mktime() e strtotime()

	$dataAproximada = date("d/m/Y", strtotime("+10 days"));

	echo $dataAproximada."<br/>";

	//funções matemáticas

	echo "Absoluto: ".abs(-5)."<br/>";
	echo "Arredondado: ".round(2.8)."<br/>";
	echo ceil(2.5)."<br/>"; //arredonda pra cima
	echo floor(2.5)."<br/>"; //arredonda pra baixo
	echo rand(3, 9)."<br/>"; //randomico

	//sorteiro
	$lista = array("athos", "rubenilson", "gabriel", "rafael");

	$vencedor = array_rand($lista);

	echo "O vencedor é: ".$lista[$vencedor];

	//manipulação de texto

	$nome = "Athos Francisco";
	$lista = array("Athos", "Francisco");

	$x = explode(" ", $nome);

	echo "<br/><br/>";

	print_r($x);

	echo "<br/><br/>";

	print_r(implode(" ", $lista));

	$y = number_format(8256312.456, 2, ",", ".");

	echo "<br/><br/>";

	echo $y;

	$texto = "O rato roeu a roupa!";
	$string = str_replace("roeu", "comeu", $texto);

	echo "<br/>".$texto." <br/>".$string;

	echo "<br/><br/>";

	echo strtolower("ATHOS FRANCISCO");

	echo "<br/><br/>";

	echo substr("ATHOS", 0, 3);

	//manipulação de array

	$array = array(
		"nome" => "Athos",
		"idade" => 54,
		"cidade" => "Recife",
		"pais" => "Brasil"
	);

	$array2 = array_keys($array);
	$array2 = array_values($array);

	echo "<br/><br/>";

	print_r($array2);
?>