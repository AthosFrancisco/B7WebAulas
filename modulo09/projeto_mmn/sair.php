<?php
require_once 'config.php';
unset($_POST['mmnlogin']);
header("location: login.php");
exit;
?>