<?php
	$autor = addslashes($_POST["autor"]);

	$sql = "SELECT * FROM pots WHERE autor = '$autor'";
?>