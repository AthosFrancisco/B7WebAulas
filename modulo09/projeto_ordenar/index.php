<?php
try{
	$pdo = new PDO("mysql:dbname=projeto_ordenar;host:localhost:3306", "root", "");
}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
}

if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
	$ordem = $_GET['ordem'];
	$sql = "SELECT * FROM usuarios ORDER BY $ordem";
}else{
	$ordem = "";
	$sql = "SELECT * FROM usuarios";
}

$sql = $pdo->query($sql);
?>

<form>
	<select name="ordem" onchange="this.form.submit()">
		<option></option>
		<option value="nome" <?php echo ($ordem=='nome')?'selected="selected"':'';?>>Pelo nome</option>
		<option value="idade" <?php echo ($ordem=='idade')?'selected="selected"':'';?>>Pela idade</option>
	</select>
</form>

<table border="1" width="400">
	<tr>
		<th>Nome</th>
		<th>Idade</th>
	</tr>
	<?php
	

	if($sql->rowCount() > 0){
		$result = $sql->fetchAll();
		foreach ($result as $value):
			?>
			<tr>
				<td><?php echo $value['nome']?></td>
				<td><?php echo $value['idade']?></td>
			</tr>
			
			<?php
		endforeach;
	}
	?>
</table>
