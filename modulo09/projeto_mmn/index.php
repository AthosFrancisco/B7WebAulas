<?php
require_once 'config.php';
require_once 'funcoes.php';

if(empty($_SESSION['mmnlogin'])){
	header("location: login.php");
	exit;
}else{
	$id = $_SESSION['mmnlogin'];

	$sql = "SELECT nome FROM usuarios WHERE id = :id;";

	$sql = $pdo->prepare($sql);
	$sql->bindValue(":id", $id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$nome = $sql['nome'];
	}else{
		header("location: login.php");
		exit;
	}
}

$id = $_SESSION['mmnlogin'];
$list = listar($id, $limite);


//echo "<pre>";
//print_r($list);
//echo "</pre>";

?>

<h1>Bem vindo <?php echo $nome;?></h1>
<button><a href="cadastro.php" style="text-decoration: none; color: #000">Cadastrar Novo Usuário</a></button>
<button><a href="sair.php" style="text-decoration: none; color: #000">Sair</a></button>


<?php
exibir($list);
?>