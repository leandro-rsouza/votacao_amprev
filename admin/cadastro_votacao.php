<?php
session_start();
include_once("conexao.php");

	$nome = mysqli_real_escape_string($conn, ucwords(trim($_POST['nome_votacao'])));
	$total = $_POST['total_votos'];
	
	$result_processo = "INSERT INTO processos (nome) VALUES ('$nome')";
	$resultado_processo = mysqli_query($conn, $result_processo) or die ("Erro ao Cadastrar!");

	if(mysqli_affected_rows($conn)){
		$_SESSION['cadastrado'] = "<span style='color: green'>Cadastro de Processo Efetuado!</span>";
		header("Location: cadastrar_votacao.php");
	}else{
		$_SESSION['cadastrado'] = "<span style='color: red'> Erro ao Cadastrar Processo! </span>";
		header("Location: cadastrar_votacao.php");
	}
?>