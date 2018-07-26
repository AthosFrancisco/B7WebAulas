<?php
	require 'config.php';
?>
<button><a href="adicionar.php" style="text-decoration: none; color: #000">Adicionar Novo Usuário</a></button>
<br/>
<br/>
<table border="1" width="100%">
	<tr>
		<th>Nome</th>
		<th>E-Mail</th>
		<th>Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){

			foreach ($sql->fetchAll() as $usuario) {
			
				echo '<tr>';
				echo '<td>'.$usuario['nome'].'</td>';
				echo '<td>'.$usuario['email'].'</td>';
				echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
				echo '</tr>';
			}

		}else{
			echo "Nenhum registro foi retornado!";
		}
	?>
</table>
