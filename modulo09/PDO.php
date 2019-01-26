<?php
	
	$dsn = "mysql:dbname=blog;host=localhost:3306";
	$dbuser = "root";
	$dbpass = "vagrant";

	//consulta

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

		echo "Conexão estabelecida com sucesso</br>";

		$sql = "SELECT * FROM usuarios WHERE email = 'athos@gmail.com' AND senha = MD5('123')";
		$sql = $pdo->query($sql);


		if($sql->rowCount() > 0){
			echo "Há usuários sim! <br/><br/>";

			foreach ($sql->fetchAll() as $usuario) {
				echo "Id: ".$usuario["id"]."<br/>";
				echo "Nome: ".$usuario["nome"]."<br/>";
				echo "E-mail: ".$usuario["email"]."<br/>";
				echo "Senha: ".$usuario["senha"]."<br/><br/>";
			}
		}else{
			echo "Não há usuários cadastrados";
		}

	}catch(PDOException $e){
		echo "Falhou: ".$e->getMessage();
	}


?>