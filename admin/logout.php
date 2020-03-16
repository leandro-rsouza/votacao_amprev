<?php
session_start();
session_destroy($_SESSION['usuario_admin']);
	header("Location: index.php");
	exit();
?>