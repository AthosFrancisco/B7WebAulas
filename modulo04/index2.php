<?php
if (isset($_POST["email"]) && !empty($_POST["email"])) {

	if(isset($_POST["senha"]) && !empty($_POST["senha"])){

		$senha = $_POST['senha'];
		$email = $_POST['email'];

		echo "meu email é: ".$email." e minha senha é: ".$senha;
	}
}

$x = 0;
switch ($x) {
	case 0:
		echo "O X é zero";
		break;
	case 1:
		echo "O X é dois";
		break;
	default:
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr/>
	<form method="POST">
		Email:<br/>
		<input type="text" name="email"><br/><br/>
		Senha:<br/>
		<input type="password" name="senha"><br/><br/>
		<input type="submit" value="enviar">
	</form>
</body>
</html>