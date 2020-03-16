<?php
session_start();
	include_once("conexao.php");

	if(empty($_POST['usuario']) || empty($_POST['senha'])) {
		$_SESSION['empty'] = "<span style='color: red'> Preencha Todos os Campos! </span>";
		header("Location: index.php");
		exit();
	}

	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);

	$user_admin = "SELECT id_admin, usuario FROM users_admin WHERE 
		usuario='{$usuario}' AND senha=md5('{$senha}')";
	$result_admin = mysqli_query($conn, $user_admin);

	$user_comum="SELECT id_cadastro, usuario FROM cadastros WHERE usuario='{$usuario}' AND senha=md5('{$senha}')";
	$result_comum = mysqli_query($conn, $user_comum);

	$row1 = mysqli_num_rows($result_admin);

	$row2 = mysqli_num_rows($result_comum);

	if($row1 == 1) {
		$_SESSION['usuario_admin'] = $usuario;
		header("Location: admin/painel.php");
		exit();
	}
	else if($row2 == 1) {
		$_SESSION['usuario'] = $usuario;
		header("Location: votar.php");
		exit();
	} else {
		$_SESSION['incorret'] = "<span style='color: red'> Erro: Usuário ou Senha Incorretos! </span>";
		header("Location: index.php");
		exit();
	}

?>