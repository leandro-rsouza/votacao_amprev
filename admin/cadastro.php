<?php
session_start();
include_once("conexao.php");
	$nome = mysqli_real_escape_string($conn, ucwords(trim($_POST['nome'])));
	$usuario = mysqli_real_escape_string($conn, trim($_POST['usuario']));
	$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));

	$sql = "SELECT COUNT(*) AS total FROM users_admin WHERE usuario = '$usuario'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if($row['total'] == 1){
		$_SESSION['usuario_existe'] = "<span style='color: red'> 
			Erro: Usuário Solicitado Já Existe! </span>";
			header('Location: cadastrar.php');
		exit;
	}

	$sql = "INSERT INTO users_admin (nome, usuario, senha) VALUES ('$nome','$usuario','$senha')";

	if($conn->query($sql) === TRUE){
		$_SESSION['status_cadastro'] = "<span style='color: green'> Cadastro Efetuado! </span>";
	}

$conn->close();

header('Location: cadastrar.php');
exit;

?>