<?php
session_start();
	include_once("conexao.php");

	if(empty($_POST['usuario']) || empty($_POST['senha'])) {
		header("Location: index.php");
		exit();
	}

	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);

	$sql = "SELECT id_admin, usuario FROM users_admin WHERE usuario='{$usuario}' AND 
		senha=md5('{$senha}')";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_num_rows($result);

	if($row == 1) {
		$_SESSION['usuario_admin'] = $usuario;
		header("Location: painel.php");
		exit();
	} else {
		header("Location: index.php");
		exit();
	}

?>