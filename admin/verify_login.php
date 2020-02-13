<?php
	if(!$_SESSION['usuario_admin']){
		header("Location: index.php");
		exit();
	}
?>