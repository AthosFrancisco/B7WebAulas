<?php
try{
	$pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost:3306", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}

if(isset($_POST['nome']) && isset($_POST['mensagem'])){
	if(!empty($_POST['nome']) && !empty($_POST['mensagem'])){
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
		date_default_timezone_set('America/Sao_Paulo');
        $data = date("Y-m-d H:i:s");
		$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW();");
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":msg", $mensagem);
		$sql->execute();
	};
}
?>

<fieldset>
	<form method="POST">
		Nome:<br/>
		<input type="text" name="nome"/><br/><br/>

		Mensagem:<br/>
		<textarea name="mensagem"></textarea><br/><br/>

		<input type="submit" value="Enviar" /><br/><br/>
	</form>
</fieldset>
<br/><br/>

<?php
$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";

$sql = $pdo->query($sql);

if($sql->rowCount() > 0){
	foreach ($sql->fetchAll() as $mensagem):
	?>
		<strong><?php echo $mensagem['nome'];?></strong><br/>
		<p><?php echo $mensagem['msg'];?></p>
		<hr/>
	<?php
	endforeach;
}else{
	echo "Não hé mensagens";
}
?>