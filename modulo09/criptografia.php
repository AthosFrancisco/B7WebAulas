<?php
	
	$nome = "Athos";
	$nome2 = md5($nome);
	$nome3 = base64_encode($nome);


	echo $nome."<br/>";
	echo $nome2."<br/>";
	echo $nome3."<br/>";
	echo base64_decode($nome3)."<br/>";
?>