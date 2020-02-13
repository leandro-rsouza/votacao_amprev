<?php
session_start();
	include_once("conexao.php");

	if(empty($_POST['usuario']) || empty($_POST['senha'])) {
		header("Location: index.php");
		exit();
	}

	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);

	$sql = "SELECT id_cadastro, usuario FROM cadastros WHERE usuario='{$usuario}' AND 
		senha=md5('{$senha}')";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_num_rows($result);

	if($row == 1) {
		$_SESSION['usuario'] = $usuario;
		header("Location: votar.php");
		exit();
	} else {
		$_SESSION['status_usuario'] = "<span style='color: red'> Erro: Usuário ou Senha Incorretos! </span>";
		header("Location: index.php");
		exit();
	}

?>