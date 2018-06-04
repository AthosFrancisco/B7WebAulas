<?php
	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email = $_POST['email'];
		echo "O email enviado é: ".$email;
		file_put_contents("teste.txt", $email, FILE_APPEND);

		header("Location: index3.php");
	}
?>